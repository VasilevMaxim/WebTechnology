var name = 'Сеть магазинов "Всё для дома"' 
var icon_path = "icon/house.svg";

var date = new Date();
var now_date = date.getDate() + "." + (date.getMonth() + 1) + "." + date.getFullYear();

document.write(
`
<header>
    <section>
        <div class="logo">
            <a href="#"><img src="` + icon_path + `" alt="icon"></a>
            <span class="logo_text"><a href="index.html">` + name + `</a></span> 
        </div>

        <div class="date">
            <span>` + now_date + `</span>
        </div>
    </section>
</header>
`);