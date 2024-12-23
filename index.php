<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rút Lì Xì May Mắn</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffefd5;
            text-align: center;
        }
        .header {
            background-color: #ff4500;
            color: white;
            padding: 20px;
        }
        .container {
            position: relative;
            margin-top: 50px;
        }
        .lixi {
            width: 300px;
            margin: 0 auto;
            position: relative;
            cursor: pointer;
            animation: shake 1s infinite;
        }
        .lixi img {
            width: 100%;
            transition: transform 0.3s;
        }
        .lixi img:hover {
            transform: scale(1.1);
        }
        @keyframes shake {
            0%, 100% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
        }
        .result {
            margin-top: 20px;
            font-size: 24px;
            color: #ff4500;
            font-weight: bold;
        }
        .footer {
            margin-top: 50px;
            font-size: 14px;
            color: #555;
        }
        .hidden {
            display: none;
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .modal-content h3 {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
        }
        .modal-content form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .modal-content input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .modal-content input:focus {
            outline: none;
            border-color: #ff4500;
        }
        .modal-content button {
            background-color: #ff4500;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .modal-content button:hover {
            background-color: #e03d00;
        }
        .close-modal {
            background-color: #bbb;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
        .close-modal:hover {
            background-color: #999;
        }
        .falling-leaves {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 9999;
    pointer-events: none;
}
.leaf-scene {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    will-change: transform;
}
.leaf-scene div {
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    transform-style: preserve-3d;
    backface-visibility: visible;
    will-change: transform;
}
.leaf-scene div:nth-child(odd) {
    background: url(https://statics.pancake.vn/web-media/4a/9d/5a/1b/f0a3c768986e797295023a1d83db974e61d6f712c8782161a3b8fd61.png);
    background-size: 100%;
    background-repeat: no-repeat;
}
.leaf-scene div:nth-child(even) {
    background: url(https://statics.pancake.vn/web-media/fb/36/4d/d3/eac3afbbeab3f635717dbac88c38351b2f5ce85039cb41db95897ba0.png);
    background-size: 100%;
}

    </style>
    
</head>
<body>
<div class='falling-leaves'></div>
    <div class="header">
        <h1>Chúc Mừng Năm Mới 2025!</h1>
        <p>Hãy thử vận may và rút lì xì ngay!</p>
    </div>
    <div class="container">
        <!-- Ảnh bao lì xì ban đầu -->
        <div id="redEnvelope" class="lixi" onclick="openModal();">
            <img src="https://i.imgur.com/cdQgfWk.png" alt="Bao Lì Xì">
        </div>
        <!-- Ảnh bao lì xì đã mở (ẩn ban đầu) -->
        <div id="openedEnvelope" class="lixi hidden">
            <img src="https://i.imgur.com/W2BowCr.png" alt="Bao Lì Xì Đã Mở">
        </div>
        <div id="result" class="result"></div>
    </div>
    <div class="footer">
        <p>© 2024 - naminc.io</p>
    </div>
    

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3>Nhập Thông Tin Trước Khi Rút Lì Xì</h3>
            <form id="userForm">
                <input type="text" id="fullName" placeholder="Họ và Tên" required>
                <input type="number" id="momoNumber" placeholder="Số Điện Thoại MoMo" required>
                <button type="button" onclick="validateForm()">Xác Nhận</button>
            </form>
            <button class="close-modal" onclick="closeModal()">Đóng</button>
        </div>
    </div>

    <script>
        // Mở modal
        function openModal() {
            document.getElementById("modal").style.display = "block";
        }

        // Đóng modal
        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        // Kiểm tra form
        function validateForm() {
            const fullName = document.getElementById("fullName").value.trim();
            const momoNumber = document.getElementById("momoNumber").value.trim();

            if (fullName === "" || momoNumber === "") {
                alert("Vui lòng nhập đầy đủ thông tin!");
                return;
            }

            if (!/^\d{10}$/.test(momoNumber)) {
                alert("Số điện thoại MoMo không hợp lệ!");
                return;
            }

            // Đóng modal và cho phép rút lì xì
            closeModal();
            getLucky();
        }

        // Logic rút lì xì
        function getLucky() {
            const prizes = [
                "10,000 VNĐ", 
                "20,000 VNĐ", 
                "50,000 VNĐ", 
                "100,000 VNĐ", 
                "200,000 VNĐ", 
                "Không có quà, thử lại nhé!"
            ];
            const randomPrize = prizes[Math.floor(Math.random() * prizes.length)];
            const result = document.getElementById("result");

            // Ẩn bao lì xì ban đầu, hiện bao lì xì đã mở
            document.getElementById("redEnvelope").classList.add("hidden");
            document.getElementById("openedEnvelope").classList.remove("hidden");

            // Hiển thị kết quả
            result.innerText = `Bạn nhận được: ${randomPrize}`;
        }
        var respon=window.innerWidth>992,numDes=4,numMB=1,leaveDes=8,leaveMob=6,numLeavesWind=respon?leaveDes:leaveMob,windSpeed=respon?numDes:numMB,LeafScene=function(t){this.viewport=t,this.world=document.createElement("div"),this.leaves=[],this.options={numLeaves:numLeavesWind,wind:{magnitude:1.2,maxSpeed:windSpeed,duration:100,start:0,speed:0}},this.width=this.viewport.offsetWidth,this.height=this.viewport.offsetHeight,this.timer=0,this._resetLeaf=function(t){t.x=2*this.width-Math.random()*this.width*1.75,t.y=-10,t.z=200*Math.random(),t.x>this.width&&(t.x=this.width+10,t.y=Math.random()*this.height/2),0==this.timer&&(t.y=Math.random()*this.height),t.rotation.speed=10*Math.random();var e=Math.random();return e>.5?t.rotation.axis="X":e>.25?(t.rotation.axis="Y",t.rotation.x=180*Math.random()+90):(t.rotation.axis="Z",t.rotation.x=360*Math.random()-180,t.rotation.speed=3*Math.random()),t.xSpeedVariation=.8*Math.random()-.4,t.ySpeed=Math.random()+1.5,t},this._updateLeaf=function(t){var e=this.options.wind.speed(this.timer-this.options.wind.start,t.y)+t.xSpeedVariation;t.x-=e,t.y+=t.ySpeed,t.rotation.value+=t.rotation.speed;var i="translateX( "+t.x+"px ) translateY( "+t.y+"px ) translateZ( "+t.z+"px )  rotate"+t.rotation.axis+"( "+t.rotation.value+"deg )";"X"!==t.rotation.axis&&(i+=" rotateX("+t.rotation.x+"deg)"),t.el.style.webkitTransform=i,t.el.style.MozTransform=i,t.el.style.oTransform=i,t.el.style.transform=i,(t.x<-10||t.y>this.height+10)&&this._resetLeaf(t)},this._updateWind=function(){if(0===this.timer||this.timer>this.options.wind.start+this.options.wind.duration){this.options.wind.magnitude=Math.random()*this.options.wind.maxSpeed,this.options.wind.duration=50*this.options.wind.magnitude+(20*Math.random()-10),this.options.wind.start=this.timer;var t=this.height;this.options.wind.speed=function(e,i){var a=this.magnitude/1.5*(t-2*i/3)/t;return a*Math.sin(2*Math.PI/this.duration*e+3*Math.PI/2)+a}}}};LeafScene.prototype.init=function(){for(var t=0;t<this.options.numLeaves;t++){var e={el:document.createElement("div"),x:80,y:80,z:80,rotation:{axis:"X",value:200,speed:100,x:0},xSpeedVariation:0,ySpeed:0,path:{type:1,start:0},image:1};this._resetLeaf(e),this.leaves.push(e),this.world.appendChild(e.el)}this.world.className="leaf-scene",this.viewport.appendChild(this.world),this.world.style.webkitPerspective="1440px",this.world.style.MozPerspective="1440px",this.world.style.oPerspective="1440px",this.world.style.perspective="1440px";var i=this;window.onresize=function(t){i.width=i.viewport.offsetWidth,i.height=i.viewport.offsetHeight}},LeafScene.prototype.render=function(){this._updateWind();for(var t=0;t<this.leaves.length;t++)this._updateLeaf(this.leaves[t]);this.timer++,requestAnimationFrame(this.render.bind(this))};var leafContainer=document.querySelector(".falling-leaves"),leaves=new LeafScene(leafContainer);leaves.init(),leaves.render();
    </script>
   
</body>
</html>