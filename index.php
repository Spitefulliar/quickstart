<!DOCTYPE html>
<html lang="ru" ng-app="app" art-main-dir>
<head>
  <title ng-bind="pageData.title"></title>

  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <base href="/">

  <!-- CSS -->  
  <link rel="stylesheet" type="text/css" href="./dist/assets/vendor.css?<?php echo time()?>">
  <link rel="stylesheet" type="text/css" href="./dist/assets/bundle.css?<?php echo time()?>">
  <!-- eof CSS -->
  
  <!-- js -->
  <script src="./dist/assets/vendor.js?<?php echo time()?>" type="text/javascript" charset="utf-8"></script>
  <script src="./dist/assets/bundle.js?<?php echo time()?>" type="text/javascript" charset="utf-8"></script>
  <!-- eof js -->
</head>

<body>
  <ui-view></ui-view>
</body>
</html>