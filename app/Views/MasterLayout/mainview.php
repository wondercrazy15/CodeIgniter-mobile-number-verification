<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This iS TITLE</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mycss.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

    <style>
        #errmsg
        {
            color: red;
        }

        .tblmobilenumber {
            border-collapse: separate !important;
            border-spacing: 0 1em !important;
        }

        #btnsubmit{
            max-width: 200px;
            margin: 0 auto;
        }

        input#btnsubmit:hover {
            background-color: #4a45457a;
            color: #ffff;
        }
            
    </style>
</head>
<body>
    <?= $this->renderSection('content') ?>
    <footer>
    <?= $this->renderSection('footer') ?>
    </footer>
</body>
</html>