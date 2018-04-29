<?php

require_once 'calls/google-api-php-client/src/auth/Google_AssertionCredentials.php';
require_once 'calls/google-api-php-client/src/Google_Client.php';
require_once 'calls/google-api-php-client/src/contrib/Google_DriveService.php';
function buildService() {

    global  $SERVICE_ACCOUNT_PKCS12_FILE_PATH,$SERVICE_ACCOUNT_EMAIL,$DRIVE_SCOPE ;
    $SERVICE_ACCOUNT_PKCS12_FILE_PATH="calls/test-1dda56b8f264.p12";

    $key = file_get_contents($SERVICE_ACCOUNT_PKCS12_FILE_PATH);
    $auth = new Google_AssertionCredentials(
        "testaccountname@black-pier-201600.iam.gserviceaccount.com",
        array("https://www.googleapis.com/auth/drive"),$key);
    $client = new Google_Client();
    $client->setUseObjects(true);
    $client->setAssertionCredentials($auth);
    return new Google_DriveService($client);
}
function downloadFile($service, $file) {
    $downloadUrl = $file->getDownloadUrl();
    if ($downloadUrl) {
        $request = new Google_HttpRequest($downloadUrl, 'GET', null, null);
        $httpRequest = Google_Client::$io->authenticatedRequest($request);
        if ($httpRequest->getResponseHttpCode() == 200) {

            return $httpRequest->getResponseBody();
        } else {
// An error occurred.
            return null;
        }
    } else {
// The file doesn't have any content stored on Drive.
        return null;
    }
}

try {

//https://drive.google.com/open?id=0B9ez4Vc-n0DbWkV6VmtRZFJIbnhqU3d2QmNHTTZfWWJYZGM0

    $service=buildService();

    $file = $service->files->get($_GET['id']);
    header('Content-Type: '.$file->getMimeType());
    print_r(downloadFile($service,$file));


} catch (Exception $e) {
    print "An error occurred1: " . $e->getMessage();
}