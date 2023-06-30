<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="app">
        <input type="text" id="file_name">
        <button id="send_btn">
            Save
        </button>
        <div id="text_field">
        </div>
        <div class="first_line">
            <div class="keys">q</div>
            <div class="keys">w</div>
            <div class="keys">e</div>
            <div class="keys">r</div>
            <div class="keys">t</div>
            <div class="keys">y</div>
            <div class="keys">u</div>
            <div class="keys">i</div>
            <div class="keys">o</div>
            <div class="keys">p</div>
        </div>
        <div class="second_line">
            <div class="keys">a</div>
            <div class="keys">s</div>
            <div class="keys">d</div>
            <div class="keys">f</div>
            <div class="keys">g</div>
            <div class="keys">h</div>
            <div class="keys">j</div>
            <div class="keys">k</div>
            <div class="keys">l</div>
        </div>
        <div class="third_line">
            <div class="keys">z</div>
            <div class="keys">x</div>
            <div class="keys">c</div>
            <div class="keys">v</div>
            <div class="keys">b</div>
            <div class="keys">n</div>
            <div class="keys">m</div>
        </div>
        <input placeholder="witer here" class="third_line input">
    </div>
    <script src={{ url('js/script.js') }}></script>
</body>
</html>
