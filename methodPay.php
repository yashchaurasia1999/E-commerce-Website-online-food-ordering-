   <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food ordering</title>
    <!-- Reset styles -->
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <!-- Google Fonts Muli -->
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    </head>
    <style>
      body {
  background: darken(@white, 5%);
  font-size: 14px;
  font-family: 'Open Sans', sans-serif;
  line-height: 1;  
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.container {
  display: block;
  max-width: @max-width;
  min-width: @min-width;
  margin: 0 auto;
  padding: 0 40px;
}

.modal {
  background: @white;
  .border-radius(3px);
  overflow: hidden;
  .form {
    .form-row {
      .display(flex);
      .flex-direction(row);
      margin: 0 0 30px;
      &:last-child {
        margin: 0;
        .input-group {
          width: 75%;
          margin: 0 15px 0 0;
          &:last-child {
            width: 25%;
            margin: 0 0 0 15px;
          }
        }
      }
    }
    .input-group {
      width: 100%;
    }
    label {
      display: block;
      width: 100%;
      margin: 0 0 10px;
      color: @accent;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    input {
      outline: none;
      display: block;
      background: fade(@black, 10%);
      width: 100%;
      margin: 0;
      border: 0;
      .border-radius(3px);
      padding: 15px;
      color: #999;
      font-size: 12px;
      font-weight: 700;
      .box-sizing(border-box);
    }
  }
  .header {
    background: @accent;
    padding: 30px;    
    text-align: center;
    h1 {
      margin: 0 0 15px;
      color: @white;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    .card-type {
      .display(flex);
      .flex-direction(row);
      .flex-wrap(wrap);
      .card {
        position: relative;
        width: 25%;
        min-width: 54px;
        text-align: center;
        transition:.3s ease;        
        .grayscale(100);
        &.active {
          .grayscale(0);
          &:after {
            display: block;
            bottom: -30px;
          }
        }
        &:after {
          content: '';
          position: absolute;
          bottom: -60px;
          left: 50%;
          margin: 0 0 0 -10px;
          border-right: 10px solid transparent;
          border-left: 10px solid transparent;
          border-bottom: 10px solid @white;
          .transition(.3s ease);
        }
        img {
          display: inline-block;
        }
      }
      li {
        display: inline-block;
        margin: 0 10px;
      }
    }    
  }
  .content {
    padding: 30px;
  }
  .footer {
    .button {
      outline: none;
      display: block;
      background: @secondary;
      width: 100%;
      border: 0;
      padding: 20px 30px;
      color: @white;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
      cursor: pointer;
    }
  }
}

.info {
    width: 300px;
    margin: 50px auto;
    text-align: center;
    h1 {
      margin: 0 0 15px;
      padding: 0;
      font-size: 24px;
      font-weight: 400;
      color: #333;
    }
    span {
      color: #666;
      font-size: 12px;
      a {
        color: @black;
        text-decoration: none;
      }
      .fa {
        color: @accent;
      }
    }
  }
    </style>
<body>
<div class="container">
  <div class="info"></div>
  <h1></h1>
  <span></span>
  <i></i>
  <form action="" class="madal"></form>
</div>

 <div class="info"></div>
  %h1 Payment Card//
  %span//
   Made with
   %i.fa.fa-heart.animated.infinite.pulse
   by
   %a{:href => ""} Deven
 <form action="" class="modal"></form>
  <header class="header">
  <h1>Payment of $145.00</h1>
    <div class="card-type">
        <div class="card active">
            <a href=""><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png" alt=""></a>
            
        </div>
        <div class="card">
            <a href=""><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png" alt=""></a>
            
        </div>
        <div class="card">
            <a href=""><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png" alt=""></a>
            
        </div>
        <div class="card">
            <a href=""><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png" alt=""></a>
            
        </div>
    </div>
  </header>

   %h1 Payment of $145.00//
   .card-type//
    %a.card.active{:href => '#'}//
     %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png'}
    %a.card{:href => '#'}
     %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Discover.png'}
    %a.card{:href => '#'}
     %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Visa.png'}
    %a.card{:href => '#'}
     %img{:src => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/MC.png'}
  <div class="content">
  <div class="form">
    <div class="form-row">
    <div class="input-group">
    <label for="">Name on card</label>
    <input type="text">
    </div>
    </div>
    <div class="form-row">
    <div class="input-group">
    <label for="">Name on card</label>
    <input type="text">
    </div>
    </div>
    <div class="form-row">
    <div class="input-group">
    <label for="">Name on card</label>
    <input type="text">
    </div>
    </div>
    <div class="form-row">
    <div class="input-group">
    <label for="">Name on card</label>
    <input type="text">
    </div>
    </div>
  </div>
  </div>
   
    .form-row
     .input-group
      %label{:for => ''} Name on card
      %input{:type => 'text', :placeholder => ''}
    .form-row
     .input-group
      %label{:for => ''} Card Number
      %input{:type => 'number', :maxlength => '16', :placeholder => ''}
    .form-row
     .input-group
      %label{:for => ''} Expiry Date
      %input{:type => 'month', :placeholder => ''}
     .input-group
      %label{:for => ''} CVS
      %input{:type => 'number', :maxlenght => '4', :placeholder => ''}
  %footer.footer
   %button.button Complete Payment

</body>
</html>