<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn1 {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn2 {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn3 {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn4 {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn5 {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}


.dropbtn:hover,
.dropbtn:focus {
    background-color: #2980B9;
}

.dropbtn1:hover,
.dropbtn1:focus {
    background-color: #2980B9;
}

.dropbtn2:hover,
.dropbtn2:focus {
    background-color: #2980B9;
}

.dropbtn3:hover,
.dropbtn3:focus {
    background-color: #2980B9;
}

.dropbtn4:hover,
.dropbtn4:focus {
    background-color: #2980B9;
}


.dropbtn5:hover,
.dropbtn5:focus {
    background-color: #2980B9;
}


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown1 {
    position: relative;
    display: inline-block;
}

.dropdown2 {
    position: relative;
    display: inline-block;
}

.dropdown3 {
    position: relative;
    display: inline-block;
}

.dropdown4 {
    position: relative;
    display: inline-block;
}

.dropdown5 {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content3 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content4 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content5 {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content2 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content3 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content4 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content5 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {
    background-color: #ddd;
}

.dropdown1 a:hover {
    background-color: #ddd;
}

.dropdown2 a:hover {
    background-color: #ddd;
}

.dropdown3 a:hover {
    background-color: #ddd;
}

.dropdown4 a:hover {
    background-color: #ddd;
}

.dropdown5 a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
</style>
</head>

<body>

    <script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function myFunction1() {
        document.getElementById("myDropdown1").classList.toggle("show");
    }

    function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
    }

    function myFunction3() {
        document.getElementById("myDropdown3").classList.toggle("show");
    }

    function myFunction4() {
        document.getElementById("myDropdown4").classList.toggle("show");
    }

    function myFunction5() {
        document.getElementById("myDropdown5").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.dropbtn1')) {

            var dropdowns1 = document.getElementsByClassName("dropdown-content1");
            var i;
            for (i = 0; i < dropdowns1.length; i++) {
                var openDropdown = dropdowns1[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.dropbtn2')) {

            var dropdowns2 = document.getElementsByClassName("dropdown-content2");
            var i;
            for (i = 0; i < dropdowns2.length; i++) {
                var openDropdown = dropdowns2[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.dropbtn3')) {

            var dropdowns3 = document.getElementsByClassName("dropdown-content3");
            var i;
            for (i = 0; i < dropdowns3.length; i++) {
                var openDropdown = dropdowns3[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.dropbtn4')) {

            var dropdowns4 = document.getElementsByClassName("dropdown-content4");
            var i;
            for (i = 0; i < dropdowns3.length; i++) {
                var openDropdown = dropdowns4[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        if (!event.target.matches('.dropbtn5')) {

            var dropdowns5 = document.getElementsByClassName("dropdown-content5");
            var i;
            for (i = 0; i < dropdowns5.length; i++) {
                var openDropdown = dropdowns5[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>

    <table width="100%" border="0">
        <tr>
            <td width="80%">
                <div align="center"><img src="/fcu/images/titlelogo.jpg" width="800" height="157" /></div>
            </td>
            <td width="20%"><?php
    if (isset($_SESSION['usr']) && isset($_SESSION['username']) )
    {
      echo "會員ID".$_SESSION['usr']."<br>" ;
      echo "會員名稱".$_SESSION['username']."<br>" ;
    }
    else
    {
      echo "會員未登錄<br>" ;
      echo "<a href='login.php'>登入網站</a>" ;
    }    

    
    ?></div>
            </td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td width="70">
                <a href="/LC/index.php">首頁</a>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction()" class="dropbtn">點燈管理區塊</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="/LC/Bdgod/godlist.php">神明列表</a>
                        <a href="/LC/Bdgod/godadd.php">新增神明資料</a>
                        <a href="/LC/Bdgod/godtojs.php">生成神明json資料</a>
                        <a href="/LC/Bdtemple/templelist.php">宮殿位址列表</a>
                        <a href="/LC/Bdtemple/templeadd.php">新增宮殿位址資料</a>
                        <a href="/LC/Bdtemple/templetojs.php">生成宮殿位址json資料</a>
                        <a href="/LC/Bdledtype/ledtypelist.php">燈種資料列表</a>
                        <a href="/LC/Bdledtype/ledtypeadd.php">新增燈種資料</a>
                        <a href="/LC/Bdledsite/ledsitelist.php">燈座資料列表</a>
                        <a href="/LC/Bdledsite/ledsiteadd.php">新增燈座資料</a>
                        <a href="/LC/Bdledsite/ledsitetojs.php">生成燈座json資料</a>
                        <a href="/LC/Bdlightform/lightlist.php">點燈表列表</a>
                        <a href="/LC/Bdlightform/lightadd.php">新增點燈表資料</a>
                        <a href="/LC/Bdlightform/lighttojs.php">生成點燈表json資料</a>
                        <div>
                        </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction1()" class="dropbtn1">行政管理區塊</button>
                    <div id="myDropdown1" class="dropdown-content1">
                        <a href="/LC/Bdcalender/calenderlist.php">行事曆內容列表</a>
                        <a href="/LC/Bdcalender/calenderadd.php">新增行事曆資料</a>
                        <a href="/LC/Bdcalender/calendertojs.php">生成行事曆內文json資料</a>
                        <a href="/LC/Bdnews/newslist.php">新聞列表</a>
                        <a href="/LC/Bdnews/newsadd.php">新增新聞資料</a>
                        <a href="/LC/Bdnews/newstojs.php">生成新聞json資料</a>
                        <a href="/LC/Bdleveltype/leveltypelist.php">工作層級列表</a>
                        <a href="/LC/Bdleveltype/leveltypeadd.php">新增工作層級</a>
                        <a href="/LC/Bdleveltype/leveltypetojson.php">生成工作層級json資料</a>
                        <a href="/LC/Bdstaff/stafflist.php">工作人員列表</a>
                        <a href="/LC/Bdstaff/staffadd.php">新增工作人員</a>
                        <a href="/LC/Bdstaff/stafftojson.php">生成工作人員json資料</a>

                    </div>
                </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction2()" class="dropbtn2">服務管理區塊</button>
                    <div id="myDropdown2" class="dropdown-content2">
                        <a href="/LC/Bddraw/drawsearch.php">查詢抽籤記錄</a>
                        <a href="/LC/Bddraw/drawtojs.php">生成抽籤json資料</a>
                        <a href="/LC/Bdservicetype/servicetypelist.php">服務類型列表</a>
                        <a href="/LC/Bdservicetype/servicetypeadd.php">新增服務類型</a>
                        <a href="/LC/Bdservicetype/servicetypetojs.php">生成服務類型json資料</a>
                        <a href="/LC/Bdbooking/bookinglist.php">預約服務表單</a>
                        <a href="/LC/Bdbooking/bookingadd.php">新增預約表單</a>
                        <a href="/LC/Bdbooking/bookingtojs.php">生成預約表單json資料</a>


                    </div>
                </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction3()" class="dropbtn3">財政管理區塊</button>
                    <div id="myDropdown3" class="dropdown-content3">
                        <a href="/LC/Bdcomefrom/comelist.php">資金來源列表</a>
                        <a href="/LC/Bdcomefrom/comeadd.php">新增資金來源類型</a>
                        <a href="/LC/Bdcomefrom/cometojs.php">生成資金來源json資料</a>
                        <a href="/LC/Bddonate/donatelist.php">捐贈單列表</a>
                        <a href="/LC/Bddonate/donateadd.php">新增捐贈表</a>
                        <a href="/LC/Bddonate/donatetojs.php">生成捐贈表json資料</a>
                        <a href="/LC/Bdboxes/boxeslist.php">香油箱資料列表</a>
                        <a href="/LC/Bdboxes/boxesadd.php">新增香油箱資料</a>
                        <a href="/LC/Bdboxes/boxestojs.php">生成香油箱json資料</a>
                </div>
                </div>
            </td>
        </tr>
    </table>