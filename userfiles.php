<?php session_start();
require_once 'calls/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #showhide{
            display: block;
        }
        #anim{
            display: none;
        }
        ul li{
            list-style: none;
        }
    </style>
</head>
<body>
<div id="anim">
    <img src="https://chargebacks911.com/wp-content/uploads/2017/06/fintech_trends_blockchain_legitimacy.gif" style="float:left;">
    <div style="float:left;">
        <ul id="log" style="margin: 50%;width: 100%;"></ul>
    </div>
</div>
<div id="showhide" style="
    background: linear-gradient(to bottom, #ececec, #ffffff);
    background-size: cover;
    height: -webkit-fill-available;
">
<div style="background: #ececee;padding: 2%;width: 50%;margin: 0 auto"><a href="index.php" style="display: block;text-align:center;width:100%;text-decoration: none;color: darkseagreen"><i class="fa fa-home"></i> Back To Home</a></div>
<div class="container" style="width: 50%;">
    <div>
    <div class="row" style="background: white;border-radius: 5px">
        <h4 class="alert alert-danger" style="margin-top: 0;">Upload File</h4>
        <div style="width: 80%;margin: 0 auto">
        <input type="file" id="filename" class="form-control">
            <br>
            <input id="upload" type="submit" value="Upload" class="btn btn-block btn-warning" style="margin-bottom: 20px">
        </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h2 class="alert alert-success">My Files</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>File Name</th>
                    <th>Download Link</th>
                </tr>
            </thead>
            <tbody>
            <?php
            global $db;
            $i=0;
                $q = $db->query("select * from files where userid=".$_SESSION['id']);
                $res = $q->fetchAll(PDO::FETCH_ASSOC);
                foreach ($res as $data){ ?>
                    <tr>
                        <td><?php echo ++$i?></td>
                        <td><?php echo $data['filename']?></td>
                        <td><a href="download.php?id=<?php echo $data['filelink']?>" class="btn btn-danger" target="_blank">Download</a> </td>
                    </tr>
                <?php }
            ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    $('#upload').click(function () {
        var fullPath = document.getElementById('filename').value;
        var filename;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
        $('#showhide').fadeOut('slow');
        $('#anim').fadeIn('slow');
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Opening Session</li>');
        }, 2000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Checking Session Validation</li>');
        }, 7000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Requesting Token</li>');
        }, 12000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Getting Token</li>');
        }, 17000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Getting File Information</li>');
        }, 22000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> File Name:'+filename+' </li>');
        }, 27000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Encrypting File </li>');
        }, 32000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Validation Encryption</li>');
        }, 37000);
        setTimeout(function(){
            $('#log').append('<li><i class="fa fa-check"></i> Uploading File</li>');
            $.ajax({
                type: "POST",
                url: "calls/upload_working.php",
                data: {file:filename},
                cache: false,
                success: function (response) {
                    location.reload();
                }
            });
        }, 42000);
    })

</script>
</body>
</html>
