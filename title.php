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
      echo "??????ID".$_SESSION['usr']."<br>" ;
      echo "????????????".$_SESSION['username']."<br>" ;
    }
    else
    {
      echo "???????????????<br>" ;
      echo "<a href='login.php'>????????????</a>" ;
    }    

    
    ?></div>
            </td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
            <td width="70">
                <a href="/LC/index.php">??????</a>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction()" class="dropbtn">??????????????????</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="/LC/Bdgod/godlist.php">????????????</a>
                        <a href="/LC/Bdgod/godadd.php">??????????????????</a>
                        <a href="/LC/Bdgod/godtojs.php">????????????json??????</a>
                        <a href="/LC/Bdtemple/templelist.php">??????????????????</a>
                        <a href="/LC/Bdtemple/templeadd.php">????????????????????????</a>
                        <a href="/LC/Bdtemple/templetojs.php">??????????????????json??????</a>
                        <a href="/LC/Bdledtype/ledtypelist.php">??????????????????</a>
                        <a href="/LC/Bdledtype/ledtypeadd.php">??????????????????</a>
                        <a href="/LC/Bdledsite/ledsitelist.php">??????????????????</a>
                        <a href="/LC/Bdledsite/ledsiteadd.php">??????????????????</a>
                        <a href="/LC/Bdledsite/ledsitetojs.php">????????????json??????</a>
                        <a href="/LC/Bdlightform/lightlist.php">???????????????</a>
                        <a href="/LC/Bdlightform/lightadd.php">?????????????????????</a>
                        <a href="/LC/Bdlightform/lighttojs.php">???????????????json??????</a>
                        <div>
                        </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction1()" class="dropbtn1">??????????????????</button>
                    <div id="myDropdown1" class="dropdown-content1">
                        <a href="/LC/Bdcalender/calenderlist.php">?????????????????????</a>
                        <a href="/LC/Bdcalender/calenderadd.php">?????????????????????</a>
                        <a href="/LC/Bdcalender/calendertojs.php">?????????????????????json??????</a>
                        <a href="/LC/Bdnews/newslist.php">????????????</a>
                        <a href="/LC/Bdnews/newsadd.php">??????????????????</a>
                        <a href="/LC/Bdnews/newstojs.php">????????????json??????</a>
                        <a href="/LC/Bdleveltype/leveltypelist.php">??????????????????</a>
                        <a href="/LC/Bdleveltype/leveltypeadd.php">??????????????????</a>
                        <a href="/LC/Bdleveltype/leveltypetojson.php">??????????????????json??????</a>
                        <a href="/LC/Bdstaff/stafflist.php">??????????????????</a>
                        <a href="/LC/Bdstaff/staffadd.php">??????????????????</a>
                        <a href="/LC/Bdstaff/stafftojson.php">??????????????????json??????</a>

                    </div>
                </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction2()" class="dropbtn2">??????????????????</button>
                    <div id="myDropdown2" class="dropdown-content2">
                        <a href="/LC/Bddraw/drawsearch.php">??????????????????</a>
                        <a href="/LC/Bddraw/drawtojs.php">????????????json??????</a>
                        <a href="/LC/Bdservicetype/servicetypelist.php">??????????????????</a>
                        <a href="/LC/Bdservicetype/servicetypeadd.php">??????????????????</a>
                        <a href="/LC/Bdservicetype/servicetypetojs.php">??????????????????json??????</a>
                        <a href="/LC/Bdbooking/bookinglist.php">??????????????????</a>
                        <a href="/LC/Bdbooking/bookingadd.php">??????????????????</a>
                        <a href="/LC/Bdbooking/bookingtojs.php">??????????????????json??????</a>


                    </div>
                </div>
            </td>
            <td width="200">
                <div class="dropdown">
                    <button onClick="myFunction3()" class="dropbtn3">??????????????????</button>
                    <div id="myDropdown3" class="dropdown-content3">
                        <a href="/LC/Bdcomefrom/comelist.php">??????????????????</a>
                        <a href="/LC/Bdcomefrom/comeadd.php">????????????????????????</a>
                        <a href="/LC/Bdcomefrom/cometojs.php">??????????????????json??????</a>
                        <a href="/LC/Bddonate/donatelist.php">???????????????</a>
                        <a href="/LC/Bddonate/donateadd.php">???????????????</a>
                        <a href="/LC/Bddonate/donatetojs.php">???????????????json??????</a>
                        <a href="/LC/Bdboxes/boxeslist.php">?????????????????????</a>
                        <a href="/LC/Bdboxes/boxesadd.php">?????????????????????</a>
                        <a href="/LC/Bdboxes/boxestojs.php">???????????????json??????</a>
                </div>
                </div>
            </td>
        </tr>
    </table>