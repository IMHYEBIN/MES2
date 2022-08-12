<?php session_start(); ?>
<?php $conn = mysqli_connect('localhost', 'server', '00000000', 'dataset'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/item2.css">
    <title>East Company | 부자재관리</title>
</head>

<body>
    <form method="post" target="view_frame" action="item2_view.php">
        <div class="container">
            <div class="title-section">
                <div class="title-section__text">
                    부자재관리
                </div>
                <button type="button" class="btn" onclick="popupNew()">등록</button>
            </div>
            <div class="search-section">
                <div class="item">제품코드</div>
                <div class="input"><input type="text" name="item_code"></div>
                <div class="item">제품명</div>
                <div class="input"><input type="text" name="item_name"></div>
                <div class="item">상태</div>
                <div class="input">
                    <select class="select" name="type">
                        <option value='0' selected="selected">===선택===</option>
                        <option value='1'>양산</option>
                        <option value="2">단종</option>
                        <option value="3">A/S</option>
                    </select>
                </div>
                <button type="reset" class="btn">초기화</button>
                <button type="submit" class="btn">검색</button>
            </div>
            <div class="table-section">
                <div class="table-header">
                    <div class="th1">번호</div>
                    <div class="th2">제품코드</div>
                    <div class="th3">제품명</div>
                    <div class="th4">단가</div>
                    <div class="th5">상태</div>
                    <div class="th6">외부업체</div>
                    <div class="th7">사급구분</div>
                    <div class="th8">안전재고</div>
                    <div class="th9">성형작업</div>
                    <div class="th10">공법</div>
                    <div class="th11">C/T</div>
                    <div class="th12">비고</div>
                    <div class="th14">관리</div>
                </div>

                <iframe frameborder="0" name="view_frame" src="item2_view.php"></iframe>

            </div>
        </div>
    </form>
    <!-- 팝업 스크립트 적용 -->
    <script type="text/javascript">
        function popupNew() {

            //window.open("[팝업을 띄울 파일명 path]", "[별칭]", "[팝업 옵션]")
            window.open("item2_new.php", "item2_new", "width=1110, height=520, top=200, left=100");

        }
    </script>
</body>

</html>