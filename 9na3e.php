<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">


<head>
<title>9na3e</title>
</head>
<body>

<h1>حساب المعدل للفرع الصناعي</h1> <a href="https://instagram.com/Xrybik"><h5>@Xrybik</h5></a>

<form action="9na3e.php" method="post">
<p> التربية الاسلامية </p> <input value="<?php echo $_POST['deen']?>" class="input is-success" type="number" name="deen" placeholder="التربية الاسلامية" max="200" required>
<p> اللغة العربية</p> <input max="200" value="<?php echo $_POST['arabic']?>" class="input is-success" type="text" name="arabic" placeholder="اللغة العربية" required>
<p> اللغة الانجليزية </p> <input max="200" value="<?php echo $_POST['english']?>" class="input is-success" type="text" name="english" placeholder="اللغة الانجليزية" required>
<p> الرياضيات </p> <input max="200" value="<?php echo $_POST['math']?>" class="input is-success" type="text" name="math" placeholder="الرياضيات">
<p> الفيزياء</p> <input max="200" value="<?php echo $_POST['phy']?>" class="input is-success" type="text" name="phy" placeholder="الفيزياء">
<p> الرسم الصناعي </p> <input max="200" value="<?php echo $_POST['iso']?>" class="input is-success" type="text" name="iso" placeholder="الرسم الصناعي">
<p> مادة العلم </p> <input max="200" value="<?php echo $_POST['sc']?>" class="input is-success" type="text" name="sc" placeholder="مادة العلم" required>
<p> ادارة المشروعات </p> <input max="200" value="<?php echo $_POST['pm']?>" class="input is-success" type="text" name="pm" placeholder="ادارة المشروعات الصناعية">
<p> تاريخ الاردن </p> <input max="200" value="<?php echo $_POST['history']?>" class="input is-success" type="text" name="history" placeholder="تاريخ الاردن" required>
<br>
<script>

    var inputs = document.getElementsByTagName("input");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type == "text") {
            inputs[i].type = "number";
        }
    }


</script>
<input class="button is-success" type="submit" value="Submit">
</form>
</body>
<style>
body {
    background-color:#f2f2f2;

}
h5{
    text-align:center;
    font-weight:bold;
    font-size:14px;
    color:coral;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
a {
    text-decoration:none;
}
html {
    background-color:#f2f2f2 !important;
}
::placeholder {
    color:#96979A !important;
}
:-ms-input-placeholder {
    color:#96979A !important;
}
::ms-input-placeholder{
    color:#96979A !important;
}
input {
    text-align: center;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    align-items: center !important;
    
}
input[type=number] {
margin-bottom:9.5px;

}
input[name=history] {
margin-bottom:0px !important;
}
@media screen and (min-width: 800px) {
    input[type=number] {
        margin-bottom:25px;
    }
}
input[type=submit] {
    background-color: #00d1b2;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer;
    margin:auto;
    text-align: center;
    text-overflow: center;

}
div[class=is-divider] {
display:none;
}
p {
    text-align: center;
    display:none;
}
h1 {
    text-align: center;
    font-size: 30px;
    font-family:'Wahran-Bold.otf'

}
h3 {
    text-align: center;
    font-size: 24px;
    font-family:'Wahran-Bold.otf';

}
@font-face {
    font-family: 'Wahran-Bold.otf';
    src: url(Wahran-Bold.otf);
}
</style>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $deen = $_POST['deen'];
    $arabic = $_POST['arabic'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $phy = $_POST['phy'];
    $iso = $_POST['iso'];
    $sc = $_POST['sc'];
    $pm = $_POST['pm'];
    $history = $_POST['history'];
    if ($iso >= $pm ) {
        $pm = 0;
    }
    else {
        $iso = 0;
    }
    if ($math >= $phy ) {
        $phy = 0;
    }
    else {
        $math = 0;
    }
    $total = $deen + $arabic + $english + $math + $phy + $iso + $sc + $pm + $history;
    $average = $total / 14;
    $fixedavg = round ($average, 2);
    echo "<h3> المعدل الكلي للفرع الصناعي هو: $fixedavg </h3>";



}
?>


