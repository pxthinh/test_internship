
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    <title>Document</title>
</head>
<body>
            <div class="center">
            <form method="POST" action="{{route('form')}}" enctype="multipart/form-data">
                @csrf
                <label>Họ và Tên</label>
                <div class="inputbox">
                <input type="text" name="name" required="required">
                </div>
                <label>Email</label>
                <div class="inputbox">
                <input type="text" name="email" required="required">
                </div>
                <label>Số điện thoại</label>
                <div class="inputbox">
                <input type="text" name="phone" required="required">
                </div>
                <label>Nội dung liên hệ</label>
                <div class="inputbox">
                <input type="textarea" name="content" required="required">
                </div>
                <div class="row">
                  <button class="submit">Submit</button>
                  <button type="reset" class="clear">Clear</button>
                </div>
             
            </form>
            </div>
</body>
</html>