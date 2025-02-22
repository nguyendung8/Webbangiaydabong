<?php

?>
<!DOCTYPE html>
<html>
<head>
	<base href="{{ asset('public/layout/frontend') }}/"
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Sport Shop - @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
        <style>
           .logout-btn {
                position: absolute;
                right: 107px;
                top: 15px;
                font-size: 17px;
                color: aliceblue;
            }
            .logout-btn  a{
                font-size: 17px;
                color: aliceblue;
                text-decoration: none;
            }
            .contact-icon {
                z-index: 1000;
                font-size: 31px;
                position: fixed;
                right: 51px;
                bottom: 88px;
                background: #ffc107;
                border-radius: 50%;
                width: 62px;
                height: 63px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
            }
            .contact {
                z-index: 1000;
                width: 300px !important;
                position: fixed;
                right: 52px;
                bottom: 150px !important;
                padding: 9px;
                background: #fff;
                border-radius: 7px;
                cursor: pointer;
                border: 1.5px solid #ffc107 !important;
                box-sizing: border-box !important;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15) !important;
                border-radius: 7px !important;
            }
            .contact-title {
                font-size: 17px;
				margin-top: 7px;
            }
            .contact label {
                margin: 0;
            }
            .contact input {
				border: none;
                width: 100%;
                border: 1px solid #d8d8d8;
                border-radius: 3px ;
                padding: 3px;
                margin-bottom: 4px;
            }
            .contact input:focus {
                border: 1px solid #ffc107 ;
				outline: #ffc107;
            }
            .submit-contact-btn {
                padding: 4px 17px;
                border: none;
                border-radius: 5px;
                background: #ffc107;
                color: #fff;
                cursor: pos;
                cursor: pointer;
                margin-top: 6px;
                float: right;
            }
			.close-btn {
				position: absolute;
				right: 9px;
				top: 6px;
				font-size: 21px;
				color: #ffc107;
			}
            .hidden {
                display: none;
            }
			a:hover{
				text-decoration: none !important;
			}
			.subnav li {
                color: black;
                padding: 10px;
                font-size: 17px;
        	}

			.user {
				position: relative;
				padding: 0 20px;
			}
			.icon {
				font-size: 35px;
				padding: 27px;
				color: white;
				cursor: pointer;
                margin-left: 7px;
			}
			.subnav li:hover {
				background-color: rgba(184, 166, 146, 0.2);
			}
            .subnav a {
                color: #ff7b07;
            }

			.user:hover .subnav {
				display: block;
			}

			.user .subnav {
				display: none;
				top: 81px;
				position: absolute;
				list-style-type: none;
				background-color: white;
				box-shadow: 0 0 5px #333;
				border-radius: 3px;
				width: 175px;
				z-index: 1;
			}

			#logo img {
                width: 212px;
        	}

			input {
                padding: 10px;
                border: none;
                cursor: pointer;
                border-radius: 3px;
			}

			.input {
				width: 550px;
				margin-top: 34px;
			}

			.submit {
				background-color: #fff;
			}
            .login-btn {
                position: absolute;
                top: 35px;
                right: 182px;
                color: #fff;
                font-size: 17px;
                height: fit-content;
                padding: 6px 4px;
                border-radius: 5px;
            }
            .register-btn {
                position: absolute;
                top: 35px;
                right: 108px;
                color: #fff;
                font-size: 17px;
                height: fit-content;
                padding: 6px 10px;
                border-radius: 5px;
            }
            .login-btn:hover {
                color: #fff;
                opacity: 0.8;
            }
            .register-btn:hover {
                color: #fff;
                opacity: 0.8;
            }
            .container {
                max-width: 1200px !important;
            }
            .product-item {
                max-width: 223px;
            }
            #header, #footer-t {
                background: linear-gradient(-180deg,#f53d2d,#f63) !important;
            }
            .menu-head {
                background: linear-gradient(-180deg,#f53d2d,#f63) !important;
                color: #fff;
            }
            .menu-item:hover {
                background: #f63;
            }
            .menu-item a:hover {
                color: #fff;
            }
            .contact textarea {
                width: 100%;
                border: 1px solid #d8d8d8;
                border-radius: 3px;
                padding: 3px;
                margin-bottom: 4px;
                min-height: 60px;
            }
            .contact textarea:focus {
                border: 1px solid #ffc107;
                outline: #ffc107;
            }
            .chat-messages {
                height: 300px;
                overflow-y: auto;
                padding: 10px;
                margin-bottom: 10px;
                background: #f9f9f9;
                border-radius: 5px;
            }

            .message {
                margin-bottom: 10px;
                padding: 8px 12px;
                border-radius: 15px;
                max-width: 70%;
                word-wrap: break-word;
            }

            .sent {
                background: #ffc107;
                color: white;
                margin-left: auto;
            }

            .received {
                background: #e9ecef;
                margin-right: auto;
            }

            .message-time {
                display: block;
                font-size: 0.8em;
                margin-top: 5px;
                opacity: 0.7;
            }

            .chat-form {
                display: flex;
                gap: 10px;
            }

            .chat-form textarea {
                flex: 1;
                height: 40px;
                resize: none;
                padding: 8px;
                border: 1px solid #d8d8d8;
                border-radius: 20px;
            }

            .chat-form textarea:focus {
                border-color: #ffc107;
                outline: none;
            }

            .submit-contact-btn {
                align-self: flex-end;
            }
        </style>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_send_chat'])) {
        try {
            $message = $_POST['message'];
            $sender_id = Auth::id(); // Current user ID
            $receiver_id = 1; // Assuming admin ID is 1

            // Insert message into database using correct column names
            $sql = "INSERT INTO vp_customer_cares (sender_id, receiver_id, message, is_read, created_at, updated_at)
                    VALUES (?, ?, ?, ?, NOW(), NOW())";
            DB::insert($sql, [$sender_id, $receiver_id, $message, 0]);
        } catch (Exception $e) {
            // Log error for debugging
            error_log($e->getMessage());
        }
    }

    // Get chat history
    $user_id = Auth::id();
    $messages = DB::select("
        SELECT * FROM vp_customer_cares
        WHERE (sender_id = ? AND receiver_id = 1)
        OR (sender_id = 1 AND receiver_id = ?)
        ORDER BY created_at ASC",
        [$user_id, $user_id]
    );
    ?>

    <!-- Modified chat form -->
    <div class="contact hidden">
        <i class="fa fa-times close-btn" onclick="toggleModal()"></i>
        <div class="contact-title">Chat với nhân viên</div>
        <div class="chat-messages">
            @foreach($messages as $msg)
                <div class="message {{ $msg->sender_id == Auth::id() ? 'sent' : 'received' }}">
                    {{ $msg->message }}
                    <small class="message-time">
                        {{ \Carbon\Carbon::parse($msg->created_at)->format('H:i') }}
                    </small>
                </div>
            @endforeach
        </div>
        <form method="POST" action="{{ route('send.message') }}" class="chat-form">
            @csrf
            <textarea name="message" placeholder="Nhập tin nhắn..." required></textarea>
            <button type="submit" class="submit-contact-btn">Gửi</button>
        </form>
    </div>

    <div class="contact-icon">
        <i class="fa fa-comments"></i>
    </div>

	<!-- header -->
	<header id="header">
		<div class="container">
			<div style="flex-wrap: unset !important;" class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<a style="text-decoration: none;" href="{{ asset('/') }}">
					    <img style="width: 85px !important;" src="img/home/logo-sport.png" alt="">
					</a>
				</div>

				<div>
					<form action="{{asset('/search/')}}" method="get">
						<input class="input" type="text" name="result" placeholder="Nhập tên sản phẩm ..." required>
						<input class="submit"type="submit" name="submit" value="Tìm Kiếm">
					</form>
				</div>

				<div class="cart icon">
					<a style="color:white;margin-left:10px" class="display" href="{{ asset('cart/show') }}">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</a>
					<a style="font-size: 18px; color:white" href="{{ asset('cart/show') }}">{{ Cart::count() }}</a>
        		</div>

				<div @if(Auth::check()) class="user icon">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
					<ul class="subnav">
                        <li><a style="color: #f53d2d;" href="{{ asset('list-order') }}">Đơn hàng của tôi</a></li>
                        <li><a style="color: #f53d2d;" href="{{ asset('list-favorite') }}">Sản phẩm yêu thích</a></li>
                        <li><a style="color: #f53d2d;" href="{{ asset('change-password') }}">Đổi mật khẩu</a></li>
                        <li><a style="color: #f53d2d;" href="{{ asset('logout') }}">Đăng xuất</a></li>
					</ul>
                    @endif
        		</div>
			</div>
            @if(!Auth::check())
             <a href="{{ asset('/login') }}" class="login-btn">Đăng nhập |</a>
             <a href="{{ asset('/register') }}" class="register-btn">Đăng ký</a>
            @endif
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul style="margin-bottom: 0px;">
							<li class="menu-item menu-head">Danh mục sản phẩm</li>
							@foreach($categories as $category)
							<li class="menu-item"><a style="text-decoration: none;" href="{{ asset('/category/' . $category->cate_id) }}">{{ $category->cate_name }}</a></li>
							@endforeach
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="{{ asset('/') }}"><img src="img/home/banner-1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{ asset('/') }}"><img src="img/home/banner-2.webp" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{ asset('/') }}"><img src="img/home/banner-3.webp" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="{{ asset('/') }}"><img src="img/home/banner-4.webp" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
								<li data-target="#demo" data-slide-to="3"></li>
								<li data-target="#demo" data-slide-to="4"></li>
								<li data-target="#demo" data-slide-to="5"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-1.webp" alt="Banner" >
								</div>
								<div class="carousel-item">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-2.webp" alt="Banner">
								</div>
								<div class="carousel-item">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-3.webp" alt="Banner" >
								</div>
                                <div class="carousel-item">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-4.webp" alt="Banner" >
								</div>
                                <div class="carousel-item">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-5.webp" alt="Banner" >
								</div>
                                <div class="carousel-item">
									<img style="border-radius: 3px;" width="900px" height="400px" src="img/home/slide-6.webp" alt="Banner" >
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

                    @yield('main')

                    </div>
                </div>
            </div>

        </div>
    </section>
        <!-- endmain -->

        <!-- footer -->
        <footer id="footer">
            <div id="footer-t">
                <div class="container">
                    <div class="row">
                        <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
							<a style="text-decoration: none;" href="{{ asset('/') }}">
                                <img style="width: 90px !important;" src="img/home/logo-sport.png" alt="">
                            </a>
                        </div>
                        <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                            <h3>About us</h3>
                            <p class="text-justify"> Sport Shop thành lập năm 2025. Chúng tôi là cửa hàng bán giày bóng đá uy tín hàng đầu Việt Nam cũng như trên toàn thế giới.</p>
                        </div>
                        <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                            <h3>Hotline</h3>
                            <p>Phone1: (+84) 935745633</p>
                            <p>Phone2: (+84) 523514521</p>
                            <p>Email: sport@gmail.com</p>
                        </div>
                        <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                            <h3>Contact Us</h3>
                            <p>Address 1: Đại Học - TPHCM</p>
                            <p>Address 2: Số 401/123 - Xuân Đỉnh - TPHCM</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- endfooter -->

		<script>
			var openBtn = document.querySelector('.contact-icon');
            var contactModal = document.querySelector('.contact');


            function toggleModal() {
                contactModal.classList.toggle('hidden');
                if (!contactModal.classList.contains('hidden')) {
                    scrollToBottom();
                }
            }

            openBtn.addEventListener('click', toggleModal);

            // Auto scroll to bottom of chat
            function scrollToBottom() {
                const chatMessages = document.querySelector('.chat-messages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            // Call scrollToBottom when new messages are added
            scrollToBottom();

            // Sử dụng route Laravel thay vì file PHP riêng lẻ
            setInterval(function() {
                fetch('{{ route("get.messages") }}')
                    .then(response => response.json())
                    .then(messages => {
                        const chatMessages = document.querySelector('.chat-messages');
                        let html = '';

                        messages.forEach(msg => {
                            const isCurrentUser = msg.sender_id == {{ Auth::id() ?? 'null' }};
                            const messageClass = isCurrentUser ? 'sent' : 'received';
                            const time = new Date(msg.created_at).toLocaleTimeString('vi-VN', {
                                hour: '2-digit',
                                minute: '2-digit'
                            });

                            html += `
                                <div class="message ${messageClass}">
                                    ${msg.message}
                                    <small class="message-time">${time}</small>
                                </div>
                            `;
                        });

                        chatMessages.innerHTML = html;
                        scrollToBottom();
                    })
                    .catch(error => console.error('Error:', error));
            }, 5000);

		</script>

    </body>
    </html>
