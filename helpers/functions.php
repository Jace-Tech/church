<?php

function sanitizeProp($str)
{
    $str = trim($str);
    $str = stripslashes($str);
    $str = htmlspecialchars($str);
    return $str;
}

function redirect($url)
{
    return header("Location: $url");
}

function redirectBack()
{
    return header("Location:" . $_SERVER['HTTP_REFERER']);
}

function setAlert($message, $type = "success")
{
    $_SESSION['ALERT'] = [
        "message" => $message,
        "type" => $type
    ];
}

function uploadFiles($files, $destination)
{
    try {
        $filenames = [];
        for ($i = 0; $i < count($files['name']); $i++) {
            $ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);
            $filename = uniqid() . ".$ext";
            $destination = "../../memories/";
            if(!move_uploaded_file($files['tmp_name'][$i], $destination . $filename)) throw new Exception("Failed to upload photo");
            $filenames[] = $filename;
        }
        return $filenames;
    } catch (\Throwable $th) {
        return false;
    }
}

function deleteFile($file)
{
    try {
        if(!file_exists($file)) throw new Exception("Failed");
        unlink($file);
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}
