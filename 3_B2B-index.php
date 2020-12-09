<?php $title = 'KunstHaus | 廠商會員中心首頁'; ?>
<?php $pageName = 'b2b'; ?>
<?php include __DIR__ . '/1_parts/0_config.php';
// 判斷是否登入
// if (!isset($_SESSION['vendor'])) {
//     header('Location: 3_B2B-sign-in.php');
//     exit;
// }
// 
?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-index.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row index">
            <div class="ogzcard">
                <div class="picture">
                    <!-- <svg class="people" xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                        <path id="Union_7" data-name="Union 7" d="M0,140V122.5c0-19.254,31.5-35,70-35s70,15.75,70,35V140ZM35,35A35,35,0,1,1,70,70,35,35,0,0,1,35,35Z" fill="#7fc4fd" />
                    </svg> -->
                </div>
                <p class="organizer">名字好難想工作室</p>
                <a href="3_B2B-member-profile.php">檢視主辦單位</a>
            </div>
            <div class="indexcard">
                <svg class="titlecard" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.249 78.712">
                    <g id="Section_Title" data-name="Section Title" transform="translate(-184.29 -1183.437)">
                        <g id="Label" transform="translate(184.29 1183.437)">
                            <g id="Rectangle_1499" data-name="Rectangle 1499" transform="translate(4.082 25.399) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                            <g id="Rectangle_1500" data-name="Rectangle 1500" transform="translate(0 21.318) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                        </g>
                        <text id="主辦單位資訊" transform="translate(272.86 1228.179) rotate(-7)" fill="#fff" font-size="20" font-family="PingFangTC-Semibold, PingFang TC" font-weight="600" letter-spacing="0.075em">
                            <tspan x="-63.75" y="0">主辦單位資訊</tspan>
                        </text>
                    </g>
                </svg>

                <div class="bgcard">
                    <svg class="notebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.526 166.836">
                        <g id="Group_862" data-name="Group 862" transform="translate(-745.434 -325.228)">
                            <g id="Group_888" data-name="Group 888">
                                <g id="Group_855" data-name="Group 855" transform="translate(986.771 77.765) rotate(-13)">
                                    <g id="Rectangle_1527" data-name="Rectangle 1527" transform="translate(-293.941 216.353)" fill="#fff" stroke="#070203" stroke-linejoin="round" stroke-width="3">
                                        <rect width="115" height="137.289" rx="8.265" stroke="none" />
                                        <rect x="-1.5" y="-1.5" width="118" height="140.289" rx="9.765" fill="none" />
                                    </g>
                                    <path id="Rectangle_1528" data-name="Rectangle 1528" d="M0,0H101.3a8.265,8.265,0,0,1,8.265,8.265v120.76a8.265,8.265,0,0,1-8.265,8.265H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(-288.508 216.353)" fill="#d64139" />
                                </g>
                                <g id="Logo" transform="translate(782.498 394.373) rotate(-11)">
                                    <path id="Path_1297" data-name="Path 1297" d="M25.271,19.1,0,33.7V0Z" transform="translate(0 14.59)" fill="#540b12" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_1298" data-name="Path 1298" d="M25.271,33.7V0L0,14.59Z" transform="translate(0 0)" fill="#dd0010" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_1299" data-name="Path 1299" d="M25.271,19.1,0,33.7V0Z" transform="translate(50.547 14.59)" fill="#d18800" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_1300" data-name="Path 1300" d="M25.271,33.7V0L0,14.59Z" transform="translate(50.547 0)" fill="#f8aa17" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_1301" data-name="Path 1301" d="M0,19.1,25.271,33.7V0Z" transform="translate(25.271 14.59)" fill="#0f2144" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_1302" data-name="Path 1302" d="M0,33.7V0L25.271,14.59Z" transform="translate(25.271 0)" fill="#00398c" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                    <g id="Group_2" data-name="Group 2" transform="translate(1.308 9.964)">
                                        <ellipse id="Ellipse_334" data-name="Ellipse 334" cx="12.419" cy="7.026" rx="12.419" ry="7.026" transform="translate(0 22.856) rotate(-66.949)" fill="#fff" stroke="#000" stroke-width="1" />
                                        <ellipse id="Ellipse_335" data-name="Ellipse 335" cx="6.21" cy="3.513" rx="6.21" ry="3.513" transform="translate(8.481 15.7) rotate(-66.949)" fill="#1a1311" />
                                        <ellipse id="Ellipse_336" data-name="Ellipse 336" cx="2.484" cy="1.405" rx="2.484" ry="1.405" transform="translate(14.227 11.688) rotate(-66.949)" fill="#f6f6f6" />
                                        <path id="Path_1484" data-name="Path 1484" d="M12.419,0c6.859,0,12.419,3.146,12.419,7.026s-5.56,7.026-12.419,7.026S0,10.907,0,7.026,5.56,0,12.419,0Z" transform="translate(0 22.856) rotate(-66.949)" fill="none" stroke="#171818" stroke-width="2" />
                                    </g>
                                </g>
                                <text id="KUNSTHAUS" transform="translate(774 383) rotate(-13)" fill="#fff" font-size="14" font-family="Roboto-Bold, Roboto" font-weight="700">
                                    <tspan x="0" y="0">KUNSTHAUS</tspan>
                                </text>
                                <g id="Group_856" data-name="Group 856" transform="translate(1148.456 271.695) rotate(42)">
                                    <rect id="Rectangle_1529" data-name="Rectangle 1529" width="14.791" height="51.053" transform="translate(-100.529 255.656)" fill="#fff" stroke="#070203" stroke-linejoin="round" stroke-width="3" />
                                    <path id="Path_1485" data-name="Path 1485" d="M-93.134,344.221l-3.7-6.4-3.7-6.4h14.791l-3.7,6.4Z" transform="translate(0 -24.703)" fill="#fff" stroke="#070203" stroke-linejoin="round" stroke-width="3" />
                                    <path id="Rectangle_1530" data-name="Rectangle 1530" d="M7.4,0h0a7.4,7.4,0,0,1,7.4,7.4v3.319a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V7.4A7.4,7.4,0,0,1,7.4,0Z" transform="translate(-100.529 244.941)" fill="#fff" stroke="#070203" stroke-linejoin="round" stroke-width="3" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p class="cardtext">想讓更多人認識您嗎？</p>
                    <div class="modbutton text-center">
                        <button class="modify btn btn-primary" onclick="location.href='3_B2B-sign-in-edit-file.php'">修改資料</button>
                    </div>
                </div>
            </div>
            <div class="indexcard">
                <svg class="titlecard" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.249 78.712">
                    <g id="Section_Title" data-name="Section Title" transform="translate(-184.29 -1183.437)">
                        <g id="Label" transform="translate(184.29 1183.437)">
                            <g id="Rectangle_1499" data-name="Rectangle 1499" transform="translate(4.082 25.399) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                            <g id="Rectangle_1500" data-name="Rectangle 1500" transform="translate(0 21.318) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                        </g>
                        <text id="活動管理" transform="translate(272.86 1228.179) rotate(-7)" fill="#fff" font-size="20" font-family="PingFangTC-Semibold, PingFang TC" font-weight="600" letter-spacing="0.075em">
                            <tspan x="-42.25" y="0">活動管理</tspan>
                        </text>
                    </g>
                </svg>

                <div class="bgcard">
                    <svg class="eventsvg" xmlns="http://www.w3.org/2000/svg" width="181.372" height="116.598" viewBox="0 0 181.372 116.598">
                        <g id="Logo" transform="translate(-229.252 -27.606)">
                            <path id="Path_1297" data-name="Path 1297" d="M290.206,87.246l-59.454,34.326V42.3Z" transform="translate(0 21.132)" fill="#540b12" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_1298" data-name="Path 1298" d="M290.206,108.378V29.106L230.752,63.432Z" transform="translate(0 0)" fill="#dd0010" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_1299" data-name="Path 1299" d="M335.914,87.246,276.46,121.572V42.3Z" transform="translate(73.211 21.132)" fill="#d18800" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_1300" data-name="Path 1300" d="M335.914,108.378V29.106L276.46,63.432Z" transform="translate(73.211 0)" fill="#f8aa17" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_1301" data-name="Path 1301" d="M253.6,87.246l59.454,34.326V42.3Z" transform="translate(36.602 21.132)" fill="#0f2144" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <path id="Path_1302" data-name="Path 1302" d="M253.6,108.378V29.106l59.454,34.326Z" transform="translate(36.602 0)" fill="#00398c" stroke="#181919" stroke-linejoin="round" stroke-width="3" />
                            <g id="Group_2" data-name="Group 2" transform="translate(233.829 52.547)">
                                <ellipse id="Ellipse_334" data-name="Ellipse 334" cx="29.218" cy="16.53" rx="29.218" ry="16.53" transform="translate(0 53.771) rotate(-66.949)" fill="#fff" stroke="#000" stroke-width="1" />
                                <ellipse id="Ellipse_335" data-name="Ellipse 335" cx="14.609" cy="8.265" rx="14.609" ry="8.265" transform="translate(19.953 36.936) rotate(-66.949)" fill="#1a1311" />
                                <ellipse id="Ellipse_336" data-name="Ellipse 336" cx="5.844" cy="3.306" rx="5.844" ry="3.306" transform="translate(33.472 27.499) rotate(-66.949)" fill="#f6f6f6" />
                                <ellipse id="Ellipse_337" data-name="Ellipse 337" cx="29.218" cy="16.53" rx="29.218" ry="16.53" transform="translate(0 53.771) rotate(-66.949)" fill="none" stroke="#171818" stroke-miterlimit="10" stroke-width="3" />
                            </g>
                        </g>
                    </svg>

                    <p class="eventcardtext">快來辦一場精彩的活動吧！</p>
                    <div class="modbutton text-center">
                        <button class="modify btn btn-primary" onclick="location.href='3_B2B-create-event.php'">上架活動</button>
                        <button class="modify btn btn-primary" onclick="location.href='3_B2B-event-manage.php'">活動管理</button>
                    </div>
                </div>
            </div>
            <div class="indexcard">
                <svg class="titlecard" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.249 78.712">
                    <g id="Section_Title" data-name="Section Title" transform="translate(-184.29 -1183.437)">
                        <g id="Label" transform="translate(184.29 1183.437)">
                            <g id="Rectangle_1499" data-name="Rectangle 1499" transform="translate(4.082 25.399) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                            <g id="Rectangle_1500" data-name="Rectangle 1500" transform="translate(0 21.318) rotate(-7)" fill="#ed5b4c" stroke="#000" stroke-width="3">
                                <rect width="174.925" height="53.713" stroke="none" />
                                <rect x="1.5" y="1.5" width="171.925" height="50.713" fill="none" />
                            </g>
                        </g>
                        <text id="訂單管理" transform="translate(272.86 1228.179) rotate(-7)" fill="#fff" font-size="20" font-family="PingFangTC-Semibold, PingFang TC" font-weight="600" letter-spacing="0.075em">
                            <tspan x="-42.25" y="0">訂單管理</tspan>
                        </text>
                    </g>
                </svg>

                <div class="bgcard">
                    <svg class="ticketsvg" xmlns="http://www.w3.org/2000/svg" width="202.828" height="168.621" viewBox="0 0 202.828 168.621">
                        <g id="ticket" transform="translate(-1307.092 -337.727)">
                            <g id="Group_853" data-name="Group 853" transform="translate(1310.937 402.034) rotate(-20)">
                                <g id="Path_1482" data-name="Path 1482" transform="translate(0 0)" fill="#fff" stroke-linejoin="round">
                                    <path d="M 6.959427356719971 73.40156555175781 C 2.294879674911499 73.40156555175781 -1.500001311302185 69.60614013671875 -1.500001311302185 64.94094848632812 L -1.499953627586365 6.959544658660889 C -1.499953627586365 2.294996976852417 2.294927358627319 -1.499907732009888 6.959475040435791 -1.499907732009888 L 133.2613983154297 -1.499979138374329 L 134.7613983154297 -1.499979138374329 L 134.7613983154297 2.087111715809442e-05 C 134.7613983154297 1.687735199928284 136.1344451904297 3.060782670974731 137.8221588134766 3.060782670974731 C 139.510498046875 3.060782670974731 140.8840637207031 1.687735199928284 140.8840637207031 2.087111715809442e-05 L 140.8840637207031 -1.499979138374329 L 142.3840637207031 -1.499979138374329 L 169.8198089599609 -1.500002980232239 C 174.4850006103516 -1.500002980232239 178.2804260253906 2.294901847839355 178.2804260253906 6.959473133087158 L 178.2804107666016 64.94085693359375 C 178.2804107666016 69.60604095458984 174.4850006103516 73.40147399902344 169.8198089599609 73.40149688720703 L 142.3840484619141 73.40149688720703 L 140.8840484619141 73.40149688720703 L 140.8840484619141 71.90149688720703 C 140.8840484619141 70.21316528320312 139.5104675292969 68.83959197998047 137.8221435546875 68.83959197998047 C 136.1344299316406 68.83959197998047 134.7613830566406 70.21316528320312 134.7613830566406 71.90149688720703 L 134.7613830566406 73.40149688720703 L 133.2613830566406 73.40149688720703 L 6.959427356719971 73.40156555175781 Z" stroke="none" />
                                    <path d="M 133.2613830566406 7.62939453125e-06 L 6.959457397460938 8.392333984375e-05 C 3.115585327148438 8.392333984375e-05 3.0517578125e-05 3.115631103515625 3.0517578125e-05 6.959556579589844 L -1.52587890625e-05 64.94095611572266 C -1.52587890625e-05 68.78485870361328 3.11553955078125 71.90155792236328 6.95941162109375 71.90155792236328 L 133.2613677978516 71.90150451660156 C 133.2613677978516 69.38215637207031 135.3028106689453 67.33958435058594 137.8221435546875 67.33958435058594 C 140.3414306640625 67.33958435058594 142.384033203125 69.38215637207031 142.384033203125 71.90150451660156 L 169.8197937011719 71.90150451660156 C 173.6636810302734 71.90148162841797 176.7803955078125 68.78475952148438 176.7803955078125 64.94085693359375 L 176.7804107666016 6.959457397460938 C 176.7804107666016 3.115554809570312 173.6637115478516 7.62939453125e-06 169.8198089599609 7.62939453125e-06 L 142.3840637207031 7.62939453125e-06 C 142.3840637207031 2.518180847167969 140.3414611816406 4.560783386230469 137.8221588134766 4.560783386230469 C 135.3028106689453 4.560783386230469 133.2613830566406 2.518211364746094 133.2613830566406 7.62939453125e-06 M 133.2613830566406 -2.999992370605469 C 134.0570373535156 -2.999992370605469 134.8200836181641 -2.683914184570312 135.3827209472656 -2.121315002441406 C 135.9453125 -1.558692932128906 136.2613830566406 -0.7956390380859375 136.2613830566406 7.62939453125e-06 C 136.2613830566406 0.8606338500976562 136.9615325927734 1.560783386230469 137.8221588134766 1.560783386230469 C 138.6833801269531 1.560783386230469 139.3840637207031 0.8606338500976562 139.3840637207031 7.62939453125e-06 C 139.3840637207031 -1.656845092773438 140.7272186279297 -2.999992370605469 142.3840637207031 -2.999992370605469 L 169.8198089599609 -2.999992370605469 C 175.3121185302734 -2.999992370605469 179.7804107666016 1.467811584472656 179.7804107666016 6.959457397460938 L 179.7803955078125 64.94085693359375 C 179.7803955078125 70.43313598632812 175.3120880126953 74.90148162841797 169.8198089599609 74.90150451660156 L 142.384033203125 74.90150451660156 C 140.7271881103516 74.90150451660156 139.384033203125 73.55835723876953 139.384033203125 71.90150451660156 C 139.384033203125 71.04026031494141 138.6833648681641 70.33958435058594 137.8221435546875 70.33958435058594 C 136.9615173339844 70.33958435058594 136.2613677978516 71.04026031494141 136.2613677978516 71.90150451660156 C 136.2613677978516 73.55835723876953 134.918212890625 74.90150451660156 133.2613677978516 74.90150451660156 L 6.95941162109375 74.90155792236328 C 1.467758178710938 74.90155792236328 -3.000015258789062 70.43325805664062 -3.000015258789062 64.94095611572266 L -2.999969482421875 6.959556579589844 C -2.999969482421875 1.467880249023438 1.467819213867188 -2.999916076660156 6.959457397460938 -2.999916076660156 L 133.2613830566406 -2.999992370605469 Z" stroke="none" fill="#070203" />
                                </g>
                                <path id="Path_1483" data-name="Path 1483" d="M32,0H4.562A4.562,4.562,0,0,1,0,4.561V67.34A4.562,4.562,0,0,1,4.562,71.9H32a6.961,6.961,0,0,0,6.961-6.961V6.959A6.96,6.96,0,0,0,32,0Z" transform="translate(137.822 0)" fill="#12778b" />
                            </g>
                            <g id="Logo" transform="translate(1351.902 395.939) rotate(-11)">
                                <path id="Path_1297" data-name="Path 1297" d="M25.271,19.1,0,33.7V0Z" transform="translate(0 14.59)" fill="#540b12" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1298" data-name="Path 1298" d="M25.271,33.7V0L0,14.59Z" transform="translate(0 0)" fill="#dd0010" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1299" data-name="Path 1299" d="M25.271,19.1,0,33.7V0Z" transform="translate(50.547 14.59)" fill="#d18800" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1300" data-name="Path 1300" d="M25.271,33.7V0L0,14.59Z" transform="translate(50.547 0)" fill="#f8aa17" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1301" data-name="Path 1301" d="M0,19.1,25.271,33.7V0Z" transform="translate(25.271 14.59)" fill="#0f2144" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1302" data-name="Path 1302" d="M0,33.7V0L25.271,14.59Z" transform="translate(25.271 0)" fill="#00398c" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <g id="Group_2" data-name="Group 2" transform="translate(1.308 9.964)">
                                    <ellipse id="Ellipse_334" data-name="Ellipse 334" cx="12.419" cy="7.026" rx="12.419" ry="7.026" transform="translate(0 22.856) rotate(-66.949)" fill="#fff" stroke="#000" stroke-width="1" />
                                    <ellipse id="Ellipse_335" data-name="Ellipse 335" cx="6.21" cy="3.513" rx="6.21" ry="3.513" transform="translate(8.481 15.7) rotate(-66.949)" fill="#1a1311" />
                                    <ellipse id="Ellipse_336" data-name="Ellipse 336" cx="2.484" cy="1.405" rx="2.484" ry="1.405" transform="translate(14.227 11.688) rotate(-66.949)" fill="#f6f6f6" />
                                    <path id="Path_1484" data-name="Path 1484" d="M12.419,0c6.859,0,12.419,3.146,12.419,7.026s-5.56,7.026-12.419,7.026S0,10.907,0,7.026,5.56,0,12.419,0Z" transform="translate(0 22.856) rotate(-66.949)" fill="none" stroke="#171818" stroke-width="2" />
                                </g>
                            </g>
                            <g id="Group_854" data-name="Group 854" transform="translate(1330.563 416.063) rotate(5)">
                                <g id="Path_1482-2" data-name="Path 1482" fill="#fff" stroke-linejoin="round">
                                    <path d="M 169.8197631835938 73.40153503417969 L 142.3840179443359 73.40153503417969 L 140.8840179443359 73.40153503417969 L 140.8840179443359 71.90153503417969 C 140.8840179443359 70.21317291259766 139.5104522705078 68.83960723876953 137.8221130371094 68.83960723876953 C 136.1343994140625 68.83960723876953 134.7613525390625 70.21317291259766 134.7613525390625 71.90153503417969 L 134.7613525390625 73.40153503417969 L 133.2613525390625 73.40153503417969 L 6.959476947784424 73.40151214599609 C 2.294905424118042 73.40151214599609 -1.499999403953552 69.6060791015625 -1.499999403953552 64.94088745117188 L -1.499999403953552 6.959461688995361 C -1.500023245811462 4.699723720550537 -0.6201422810554504 2.575319051742554 0.9775720238685608 0.9776046872138977 C 2.575286388397217 -0.6200858354568481 4.699690818786621 -1.499990582466125 6.959429264068604 -1.499990582466125 L 133.2613525390625 -1.499990582466125 L 134.7613525390625 -1.499990582466125 L 134.7613525390625 9.427025361219421e-06 C 134.7613525390625 1.687723755836487 136.1343994140625 3.060771226882935 137.8221130371094 3.060771226882935 C 139.5104522705078 3.060771226882935 140.8840179443359 1.687723755836487 140.8840179443359 9.427025361219421e-06 L 140.8840179443359 -1.499990582466125 L 142.3840179443359 -1.499990582466125 L 169.8197631835938 -1.499966740608215 C 174.4849548339844 -1.499966740608215 178.2803649902344 2.294938087463379 178.2803649902344 6.959485530853271 L 178.2803649902344 64.94091796875 C 178.2803649902344 69.60610198974609 174.4849548339844 73.40153503417969 169.8197631835938 73.40153503417969 Z" stroke="none" />
                                    <path d="M 6.95941162109375 0 C 3.11553955078125 0 -3.0517578125e-05 3.115570068359375 -1.52587890625e-05 6.95947265625 L -1.52587890625e-05 64.94087219238281 C -1.52587890625e-05 68.78477478027344 3.115585327148438 71.90151977539062 6.95947265625 71.90151977539062 L 133.2613677978516 71.90154266357422 C 133.2613677978516 69.38219451904297 135.3027648925781 67.33962249755859 137.8221130371094 67.33962249755859 C 140.3414459228516 67.33962249755859 142.3840179443359 69.38219451904297 142.3840179443359 71.90154266357422 L 169.8197631835938 71.90154266357422 C 173.6636352539062 71.90154266357422 176.7803649902344 68.78479766845703 176.7803649902344 64.94089508056641 L 176.7803649902344 6.959495544433594 C 176.7803649902344 3.115570068359375 173.6636352539062 2.288818359375e-05 169.8197631835938 2.288818359375e-05 L 142.3840179443359 2.288818359375e-05 C 142.3840179443359 2.518196105957031 140.3414459228516 4.560768127441406 137.8221130371094 4.560768127441406 C 135.3027648925781 4.560768127441406 133.2613677978516 2.518196105957031 133.2613677978516 2.288818359375e-05 L 6.95941162109375 0 M 6.95941162109375 -3 L 133.2613677978516 -2.999977111816406 C 134.918212890625 -2.999977111816406 136.2613677978516 -1.656829833984375 136.2613677978516 2.288818359375e-05 C 136.2613677978516 0.8606185913085938 136.9615173339844 1.560768127441406 137.8221130371094 1.560768127441406 C 138.683349609375 1.560768127441406 139.3840179443359 0.8606185913085938 139.3840179443359 2.288818359375e-05 C 139.3840179443359 -1.656829833984375 140.7271728515625 -2.999977111816406 142.3840179443359 -2.999977111816406 L 169.8197631835938 -2.999977111816406 C 175.3120727539062 -2.999977111816406 179.7803649902344 1.467819213867188 179.7803649902344 6.959495544433594 L 179.7803649902344 64.94089508056641 C 179.7803649902344 70.43321990966797 175.3120727539062 74.90154266357422 169.8197631835938 74.90154266357422 L 142.3840179443359 74.90154266357422 C 140.7271728515625 74.90154266357422 139.3840179443359 73.55839538574219 139.3840179443359 71.90154266357422 C 139.3840179443359 71.04029846191406 138.683349609375 70.33962249755859 137.8221130371094 70.33962249755859 C 136.9615173339844 70.33962249755859 136.2613677978516 71.04029846191406 136.2613677978516 71.90154266357422 C 136.2613677978516 72.69719696044922 135.9452972412109 73.46024322509766 135.3826904296875 74.02287292480469 C 134.820068359375 74.58547210693359 134.0570220947266 74.90154266357422 133.2613677978516 74.90154266357422 L 6.95947265625 74.90151977539062 C 1.467788696289062 74.90151977539062 -3.000015258789062 70.43319702148438 -3.000015258789062 64.94087219238281 L -3.000015258789062 6.95947265625 C -3.000030517578125 4.299072265625 -1.964111328125 1.797996520996094 -0.0830841064453125 -0.0830535888671875 C 1.797943115234375 -1.964080810546875 4.29901123046875 -3 6.95941162109375 -3 Z" stroke="none" fill="#070203" />
                                </g>
                                <path id="Path_1483-2" data-name="Path 1483" d="M32,0H4.562A4.562,4.562,0,0,1,0,4.561V67.34A4.562,4.562,0,0,1,4.562,71.9H32a6.961,6.961,0,0,0,6.961-6.961V6.959A6.96,6.96,0,0,0,32,0Z" transform="translate(137.822 0)" fill="#ed5b4c" />
                            </g>
                            <g id="Logo-2" data-name="Logo" transform="translate(1362.656 431.002) rotate(5)">
                                <path id="Path_1297-2" data-name="Path 1297" d="M25.271,19.1,0,33.7V0Z" transform="translate(0 14.59)" fill="#540b12" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1298-2" data-name="Path 1298" d="M25.271,33.7V0L0,14.59Z" transform="translate(0 0)" fill="#dd0010" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1299-2" data-name="Path 1299" d="M25.271,19.1,0,33.7V0Z" transform="translate(50.547 14.59)" fill="#d18800" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1300-2" data-name="Path 1300" d="M25.271,33.7V0L0,14.59Z" transform="translate(50.547 0)" fill="#f8aa17" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1301-2" data-name="Path 1301" d="M0,19.1,25.271,33.7V0Z" transform="translate(25.271 14.59)" fill="#0f2144" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <path id="Path_1302-2" data-name="Path 1302" d="M0,33.7V0L25.271,14.59Z" transform="translate(25.271 0)" fill="#00398c" stroke="#181919" stroke-linejoin="round" stroke-width="2" />
                                <g id="Group_2-2" data-name="Group 2" transform="translate(1.308 9.964)">
                                    <ellipse id="Ellipse_334-2" data-name="Ellipse 334" cx="12.419" cy="7.026" rx="12.419" ry="7.026" transform="translate(0 22.856) rotate(-66.949)" fill="#fff" stroke="#000" stroke-width="1" />
                                    <ellipse id="Ellipse_335-2" data-name="Ellipse 335" cx="6.21" cy="3.513" rx="6.21" ry="3.513" transform="translate(8.481 15.7) rotate(-66.949)" fill="#1a1311" />
                                    <ellipse id="Ellipse_336-2" data-name="Ellipse 336" cx="2.484" cy="1.405" rx="2.484" ry="1.405" transform="translate(14.227 11.688) rotate(-66.949)" fill="#f6f6f6" />
                                    <path id="Path_1484-2" data-name="Path 1484" d="M12.419,0c6.859,0,12.419,3.146,12.419,7.026s-5.56,7.026-12.419,7.026S0,10.907,0,7.026,5.56,0,12.419,0Z" transform="translate(0 22.856) rotate(-66.949)" fill="none" stroke="#171818" stroke-width="2" />
                                </g>
                            </g>
                            <text id="KUNSTHAUS" transform="translate(1486.803 495.719) rotate(-85)" fill="#fff" font-size="9" font-family="Roboto-Bold, Roboto" font-weight="700">
                                <tspan x="0" y="0">KUNSTHAUS</tspan>
                            </text>
                            <text id="KUNSTHAUS-2" data-name="KUNSTHAUS" transform="translate(1485.974 408.207) rotate(-111)" fill="#fff" font-size="9" font-family="Roboto-Bold, Roboto" font-weight="700">
                                <tspan x="0" y="0">KUNSTHAUS</tspan>
                            </text>
                        </g>
                    </svg>

                    <p class="cardtext">檢視您的訂單</p>
                    <div class="modbutton text-center">
                        <button class="modify btn btn-primary" onclick="location.href='3_B2B-ticket-list-history.php'">檢視訂單</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slogan">
            <p class="word-wrap">活動可以為您帶來
                <span class="word wisteria">快樂</span>
                <span class="word belize">知識</span>
                <span class="word pomegranate">驚奇</span>
                <span class="word green">創造</span>
                <span class="word midnight">活力</span>
            </p>
        </div>
    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src="">
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>