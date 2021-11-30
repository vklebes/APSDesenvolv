const jsonMsgs = [
    {
        id: 1,
        id_user: 1,
        nome: "Victor Dias Klebes",
        tema: "Naruto Shippuden",
        likes: 122,
        texto: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, harum quasi dolores dignissimos minus ipsam, culpa esse non quam nam quod velit sint nihil voluptas vel consectetur cumque beatae in!"
    },
    {
        id: 2,
        id_user: 1,
        nome: "Victor Dias Klebes",
        tema: "Dragon Ball Super",
        likes: 11,
        texto: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dolorem?"
    },
    {
        id: 3,
        id_user: 1,
        nome: "Victor Dias Klebes",
        tema: "Naruto Shippuden",
        likes: 53,
        texto: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, harum quasi dolores dignissimos minus ipsam, culpa esse non quam nam quod velit sint nihil voluptas vel consectetur cumque beatae in!"
    },
    {
        id: 4,
        id_user: 1,
        nome: "Victor Dias Klebes",
        tema: "One Piece",
        likes: 20,
        texto: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus mollitia dignissimos aliquam voluptates, fugiat sint ad officiis nulla cupiditate. Rem."
    },
    {
        id: 5,
        id_user: 1,
        nome: "Victor Dias Klebes",
        tema: "Boruto",
        likes: 22,
        texto: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, dolorem?"
    },
];

$(() => {
    //Input focus event
    $(".custom-input").focus(function(){
        $(this).next("label").addClass("active");
    });

    $(".custom-input").blur(function(){
        if($(this).val().trim().length === 0){
            $(this).next("label").removeClass("active");
        }
    });

    //Scroll BG event
    window.addEventListener('scroll', function(){
        const posY = $(window).scrollTop();
        const backgroundY = posY * 0.3;
        $(".bg-home img").css('top', backgroundY);

        if(posY > 150){
            $(".wrap-home .menu-mask").addClass("blur");
        } else{
            $(".wrap-home .menu-mask").removeClass("blur");
        }
    });

    //Open Modal event
    $(".btn-open-modal").click(() => {
        $(".mask-wrap").addClass("active");
        $(".modal-new-content").css("display", "flex");
        setTimeout(() => {
            $(".modal-new-content").addClass("active");
        }, 100);
    });

    //Close Modal event
    $(".btn-close").click(() => {
        $(".modal-new-content").removeClass("active");
        setTimeout(() => {
            $(".mask-wrap").removeClass("active");
            $(".modal-new-content").removeAttr("style");
        }, 100);
    });

    //Popula conteudo
    jsonMsgs.map(function(el){
        const box = `
            <div class="home-msg-box">
                <div class="msg-icon-area">
                    <div class="avatar-box avatar-2x">
                        <div class="avatar-icon"></div>
                    </div>
                </div>
                <div class="msg-title-area">
                    <p>${el.nome}</p>
                    <span>${el.tema}</span>
                </div>
                <div class="msg-content">
                    <p>${el.texto}</p>
                    <div>
                        <div>
                            <div style="width:24px; height:24px; position:relative;">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 likeIcon liked" onclick="likePost(this);"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 likeIcon" onclick="likePost(this);"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                            <span>${el.likes}</span>
                        </div>
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                </div>
            </div>
        `;

        $(".home-mid-content").append(box);
    });
});

function salvarAlteracoes(){
    window.location.href='home.html';
}

function toggleLogin(){
    $('.create-wrap input, .login-wrap input').removeClass('input-error');
    if($(".login-wrap").hasClass("hidden")){
        $(".create-wrap").css("opacity", "0");
    
        setTimeout(() => {
            $(".create-wrap").addClass("hidden");
            $(".login-wrap").removeClass("hidden");

            setTimeout(() => {
                $(".login-wrap").removeAttr("style");
            }, 300);
        }, 300);
        
    } else{
        $(".login-wrap").css("opacity", "0");
    
        setTimeout(() => {
            $(".login-wrap").addClass("hidden");
            $(".create-wrap").removeClass("hidden");

            setTimeout(() => {
                $(".create-wrap").removeAttr("style");
            }, 300);
        }, 300);
    }
}

function createAccount(){
    $('.create-wrap input, .login-wrap input').removeClass('input-error');
    let hasError = false;

    $(".create-wrap input").each(function(){
        if($(this).val() === ''){
            $(this).addClass('input-error');
            hasError = true;
        }

        switch($(this).attr("id")){

            case "txtCriarEmail":
                if(!ValidarEmail($(this).val())){
                    $(this).addClass('input-error');
                    hasError = true;
                }
                break;
        }
    });

    if(!hasError){
        location.href='home.html';
    }
}

function ValidarEmail (email) {
    var emailPattern =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    return emailPattern.test(email); 
}

function previewFile(_that) {

    let reader = new FileReader();
    let file = _that.files[0];
  
    reader.readAsDataURL(file);
    reader.onloadend = () => {
      const data64 = reader.result;

      $(".avatar-icon").css("background-image", "url('" + data64.replace(/(\r\n|\n|\r)/gm, "") + "')");
    };
    
}

function likePost(_that){
    let likes;

    $(_that).css("display", "none");
    $(_that).removeClass("anim");
    likes = parseInt($(_that).closest("div").next("span").text());

    if($(_that).hasClass("liked")){
        $(_that).closest("div").find("svg:last-child").css("display", "block");
        
        likes--;
    } else{
        $(_that).closest("div").find("svg:first-child").css("display", "block").addClass("anim");
        likes++;
    }

    $(_that).closest("div").next("span").text(likes);
}