<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Лун</title>
</head>
<body>
<div class="app">
    <div class="header">Експорт оголошень</div>
    <div class="content-wrapper">
        <div class="export-button" onclick="exportAll('xml')">Експортувати в XML</div>
    </div>
    <div class="download-wrapper">
        <div id="spinner" class="loader"></div>
        <a href="" id="download" class="download-button" download>Скачати файл</a>
    </div>
</div>
<script type="application/javascript">
    function exportAll(type) {
        let download = document.getElementById('download');
        let spinner = document.getElementById('spinner');
        download.style.display = 'none';
        spinner.style.display = 'block';
        axios.post('/export-all', {type : type})
            .then((response) => {
                download.href = response.data;
                spinner.style.display = 'none';
                download.style.display = 'flex';
            })
            .catch((error) =>{
                alert('При експорті данних виникла помилка. ' + error.response.data.message);
            })

    }
</script>
</body>
</html>
