<?= $this->Html->css('login') ?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Login Dragones</title>
    <!---
    <style type="text/css">
        html {
          cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64" height="64"><circle cx="32" cy="32" r="32" style="fill: red;"/></svg>'), auto;
        }
      </style>
    -->
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>
<body>    
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="https://www.clipartkey.com/mpngs/m/106-1062182_clip-art-png-transparent-images-pluspng-dragon-tribal.png" />
                </div>
                <?= $this->Form->create(); ?>
                    <?= $this->Form->input('username',['class'=>'form-control','placeholder'=>'username']); ?>
                    <?= $this->Form->input('password',['class'=>'form-control','type'=>'password','placeholder'=>'password']); ?>
                    <?= $this->Form->submit('login',['class'=>'button']); ?>
                    <?= $this->Html->link('register',['controller'=>'users','action'=>'add','class'=>'btn btn-primary']); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</body>
</html>