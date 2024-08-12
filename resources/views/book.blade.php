<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title>book</title>
</head>

<body>
    <form action="">
        <label for="">المصدر</label>
        <select data-mdb-select-init>
            <option value="1" name="source">دمشق</option>
            <option value="2" name="source">حلب</option>
            <option value="3" name="source">اللاذقية</option>
        </select>
        <label for="">الوجهة</label>
        <select data-mdb-select-init>
            <option value="1" name="destination">دمشق</option>
            <option value="2" name="destination">حلب</option>
            <option value="3" name="destination">اللاذقية</option>
        </select>
        <label for="">طريقة النقل</label>
        <select data-mdb-select-init>
            <option value="1" name="transport">بري</option>
            <option value="2" name="transport">جوي</option>
        </select>
        </li> <label for="">visa card number</label>
        <input type="text" name="visacard-number" id="visacard">
        <input type="submit" value="submit">
    </form>
</body>

</html>