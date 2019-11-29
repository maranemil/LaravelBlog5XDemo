<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>Hello, <?php echo $name; ?></h1>
    </body>
</html>

<div class="content">
    <div class="title m-b-md">
        {{ config('app.name') }}
    </div>
</div>