<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>页面未找到</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#667eea 0,#764ba2 100%);color:#fff;height:100vh;display:flex;justify-content:center;align-items:center;text-align:center;overflow:hidden}.container{max-width:800px;padding:2rem;position:relative;z-index:1}h1{font-size:8rem;font-weight:600;margin-bottom:1rem;text-shadow:0 5px 15px rgba(0,0,0,0.2);animation:float 3s ease-in-out infinite}h2{font-size:2rem;margin-bottom:1.5rem;font-weight:400}p{font-size:1.2rem;margin-bottom:2rem;opacity:.9;line-height:1.6}.btn{display:inline-block;background:#fff;color:#764ba2;padding:.8rem 2rem;border-radius:50px;text-decoration:none;font-weight:600;transition:all .3s ease;box-shadow:0 5px 15px rgba(0,0,0,0.1)}.btn:hover{transform:translateY(-3px);box-shadow:0 8px 20px rgba(0,0,0,0.2)}.astronaut{position:absolute;width:150px;animation:float 6s ease-in-out infinite}.astronaut-1{top:10%;left:10%;animation-delay:0s}.astronaut-2{bottom:15%;right:10%;animation-delay:2s}@keyframes float{0%{transform:translateY(0px)}50%{transform:translateY(-20px)}100%{transform:translateY(0px)}}.stars{position:absolute;top:0;left:0;width:100%;height:100%;z-index:0}.star{position:absolute;background-color:#fff;border-radius:50%;animation:twinkle var(--duration) infinite ease-in-out;opacity:0}@keyframes twinkle{0%{opacity:0}50%{opacity:var(--opacity)}100%{opacity:0}}@media(max-width:768px){h1{font-size:5rem}h2{font-size:1.5rem}.astronaut{width:100px}}
    </style>
</head>
<body>
    <!-- 星星背景 -->
    <div class="stars" id="stars"></div>
    
    <!-- 漂浮的宇航员 -->
    <img src="https://cdn-icons-png.flaticon.com/512/3242/3242257.png" alt="Astronaut" class="astronaut astronaut-1">
    <img src="https://cdn-icons-png.flaticon.com/512/3242/3242257.png" alt="Astronaut" class="astronaut astronaut-2">
    
    <!-- 主要内容 -->
    <div class="container">
        <h1>404</h1>
        <h2>哎呀，页面飞走啦!</h2>
        <p>我们似乎找不到您要访问的页面。可能页面已被移除、名称更改或暂时不可用。</p>
        <a href="//zx.aate.cc" class="btn">返回首页</a>
    </div>
    
    <script>
        // 创建星星背景
        function createStars() {
            const starsContainer = document.getElementById('stars');
            const starsCount = 100;
            
            for (let i = 0; i < starsCount; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                
                // 随机大小 (1-3px)
                const size = Math.random() * 2 + 1;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;
                
                // 随机位置
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                
                // 随机动画参数
                star.style.setProperty('--duration', `${Math.random() * 3 + 2}s`);
                star.style.setProperty('--opacity', Math.random() * 0.5 + 0.3);
                
                // 随机延迟
                star.style.animationDelay = `${Math.random() * 5}s`;
                
                starsContainer.appendChild(star);
            }
        }
        
        // 页面加载后创建星星
        window.addEventListener('load', createStars);
    </script>
</body>
</html>