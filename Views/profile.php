<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ホーム画面です">
    <link rel="icon" href="/twitterClone/Views/img/logo-twitterblue.svg">
    <!-- Bootstrap　CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/twitterClone/Views/css/style.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <!-- いいね！JS -->
    <!-- <script src="<?php echo HOME_URL; ?>/twitterClone/Views/js/like.js" defer></script> -->
    <title>ホーム画面/titterクローン</title>
</head>
<body class="home profile text-center">
    <div class="container">
        <div class="side">
            <div class="side-inner"> 
                 <ul class="nav flex-column"> 
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="/twitterClone/Views/img/logo-twitterblue.svg" alt="logo" class="icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="/twitterClone/Views/img/icon-home.svg" alt="homme"></a></li>
                    <li class="nav-item"><a href="search.php" class="nav-link"><img src="/twitterClone/Views/img/icon-search.svg" alt="search"></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="/twitterClone/Views/img/icon-notification.svg" alt="notification"></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="/twitterClone/Views/img/icon-profile.svg" alt="profile"></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="/twitterClone/Views/img/icon-post-tweet-twitterblue.svg" alt="post" class="post-twitter"></a></li>
                    <li class="nav-itme my-icon"><img src="/twitterClone/Views/img_uploaded/user/sample-person.jpg" alt="sample-person" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true"></li>
                </ul>
            </div>
        </div> 
        <div class="main">
            <div class="main-header">
                <h1>太郎</h1>
            </div>
            <div class="profile-area">  
                <div class="top">
                    <div class="user"><img src="/twitterClone/Views/img_uploaded/user/sample-person.jpg" alt=""></div>
                   
                    <?php if(isset($_GET['user_id'])):?>
                    <!-- 他人のプロフィール -->
                        <?php if(isset($_GET['case'])):?>
                            <button class="btn btn-sm">フォローを外す</button>
                        <?php else:?>
                            <button class="btn btn-sm btn-reverse">フォローする</button>
                        <?php endif;?>
                    <?php else:?>
                    <!-- 自分のプロフィール -->
                        <button class="btn btn-reverse btn-sm js-modal-button" type="submit" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィールを編集</button>

                        <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="profile.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h5 class="modal-title">プロフィールを編集</h5>
                                            <button class="bun-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="user">
                                                <img src="/twitterClone/Views/img_uploaded/user/sample-person.jpg" alt="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-1">プロフィール写真</label>
                                                <input type="file" class="form-control form-control-sm" name="image">
                                            </div>

                                            <input type="text" class="mb-4 form-control" name="nickname" maxlength="50" value="太郎" placeholder="ニックネーム" required>
                                            <input type="text" class="mb-4 form-control" name="name" maxlength="50" value="taro" placeholder="ユーザー名" required>
                                            <input type="email" class="mb-4 form-control" name="email" maxlength="254" value="taro@techis.jp" placeholder="メールアドレス" required>
                                            <input type="password" class="mb-4 form-control" name="password" minlength="4" maxlength="128" value="" placeholder="パスワードを変更する場合ご入力ください">
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-reverse" data-bs-dismiss="modal">キャンセル</button>
                                            <button class="btn" type="submit">保存する</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
                <div class="name">太郎</div>
                <dev class="text-muted">@taro</dev>
                <div class="follow-follower">
                    <div class="follow-count">1</div>
                    <div class="follow-text">フォロー中</div>
                    <div class="follow-count">1</div>
                    <div class="follow-text">フォロワー</div>
                </div>
            </div>
                    </form>
                </div>
            </div>

            <div class="ditch"></div>
            <!-- ツイート一蘭 -->
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded',function() {
            $('.js-popover').popover({
                container: 'body'
            })
        },false);
    </script>
</body>
</html>