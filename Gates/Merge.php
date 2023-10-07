<?php

// Set the directory path to save the downloaded files
$dir_path = '/path/to/directory/';

// Get the chat ID and message ID from the update data
$update = json_decode(file_get_contents('php://input'), true);
$chat_id = $update['message']['chat']['id'];
$msg_id = $update['message']['message_id'];

// Check if the user sent files
if (isset($update['message']['document'])) {
    $file_id = $update['message']['document']['file_id'];
    $file_name = $update['message']['document']['file_name'];
    $file_url = $api_url . 'getFile?file_id=' . $file_id;

    // Download the file and save it to the specified directory
    $file_contents = file_get_contents($file_url);
    file_put_contents($dir_path . $file_name, $file_contents);

    // Send a message to confirm that the file was downloaded
    $msg_text = "File '$file_name' downloaded successfully!";
    file_get_contents($api_url . "sendMessage?chat_id=$chat_id&text=$msg_text&reply_to_message_id=$msg_id");
}

// Check if the user sent the /merge command
if (isset($update['message']['text']) && $update['message']['text'] == '/merge') {

    // Set the name for the merged file
    $merged_file_name = 'Merged.txt';

    // Create the merged file
    $merged_file = fopen($dir_path . $merged_file_name, 'w');

    // Loop through all files in the directory
    foreach (glob($dir_path . '*.txt') as $file_name) {

        // Skip the merged file
        if (basename($file_name) == $merged_file_name) {
            continue;
        }

        // Open the file to merge and read its contents
        $file_to_merge = fopen($file_name, 'r');
        $file_contents = fread($file_to_merge, filesize($file_name));

        // Write the file's contents to the merged file
        fwrite($merged_file, $file_contents);

        fclose($file_to_merge);
    }

    fclose($merged_file);

    // Send the merged file to the user
    $merged_file_contents = file_get_contents($dir_path . $merged_file_name);
    $merged_file_data = [
        'chat_id' => $chat_id,
        'document' => new CURLFile(realpath($dir_path . $merged_file_name)),
        'caption' => 'Merged file'
    ];
    file_get_contents($api_url . 'sendDocument?' . http_build_query($merged_file_data));

    // Send a message to confirm that the merge operation was completed
    $msg_text = "Files merged successfully!";
    file_get_contents($api_url . "sendMessage?chat_id=$chat_id&text=$msg_text&reply_to_message_id=$msg_id");
}
?>
