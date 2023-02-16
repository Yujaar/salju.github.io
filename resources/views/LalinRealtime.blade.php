<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <title>CCT | Lalin Realtime dan Pendapatan</title>
  <link rel="stylesheet" href="styles.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
</head>
<style>
  :root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
    --veryLightGray: hsl(0, 0%, 98%);
    --weight1: 200;
    --weight2: 400;
    --weight3: 600;
}

body {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    background-image: var(--veryLightGray);
}

.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);

}

h1:last-of-type {
    color: var(--varyDarkBlue);
}

@media (max-width: 400px) {
    h1 {
        font-size: 1.5rem;
    }
}

.header {
    text-align: center;
    line-height: 0.8;
    margin-bottom: 50px;
    margin-top: 50px;
}

.header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
}


.box p {
    color: var(--grayishBlue);
}

.box {
    border-radius: 5px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    padding: 30px;
    margin: 20px;  
}

img {
    float: right;
}

@media (max-width: 450px) {
    .box {
        height: 200px;
    }
}

@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: center;
        height: 180px;
    }
}

.cyan {
  border-top: 5px solid var(--cyan);
    border-bottom: 5px solid var(--cyan);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.red {
    border-top: 5px solid var(--red);
    border-bottom: 5px solid var(--red);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.blue {
    border-top: 5px solid var(--blue);
    border-bottom: 5px solid var(--blue);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
.orange {
  border-top: 5px solid var(--orange);
    border-bottom: 5px solid var(--orange);
    animation-name: blinking;
    animation-duration: 1s;
    animation-iteration-count: 100;
}
@keyframes blinking {
  50% {
    border-color: #ffcd5f;
  }
}

h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
}


@media (min-width: 950px) {
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box-down {
        position: relative;
        top: 150px;
    }
    .box {
        width: 20%;
     
    }
    .header p {
        width: 30%;
    }
    
}
</style>
<body>
  <div class="header">
    <h1>PT Cimanggis Cibitung Tollways.</h1>
    <h1>Realtime Lalin dan Pendapatan</h1>
  </div>
  <div class="row1-container">
    <div class="box box-down cyan">
      <h2>SHIFT 1</h2>
      <p>LALIN :  Kendaraan </p>
      <p>PENDAPATAN : <b>Rp.18.890.000</b></p>
    </div>

    <div class="box red">
      <h2>TOTAL PENDAPATAN</h2>
      <hr>
      <h2>Lalin : <b> 10.000</b></h2>
     <h2>Pendapatan : <br> <b> Rp. 100.000.000</b></h2>
    </div>

    <div class="box box-down blue">
      <h2>SHIFT 2</h2>
      <p>LALIN :  Kendaraan </p>
      <p>PENDAPATAN : <b>Rp.18.890.000</b></p>
    </div>
  </div>
  <div class="row2-container">
    <div class="box orange">
      <h2>SHIFT 3</h2>
      <p>LALIN :  Kendaraan </p>
      <p>PENDAPATAN : <b>Rp.18.890.000</b></p>
    </div>
  </div>
  <footer>
    <p class="attribution">
      Coded by <a href="#">PT. MODULE INTRACS YASATAMA</a>.
    </p>
  </footer>
</body>

</html>

