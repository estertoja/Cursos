function carregar() {

    var msg = window.document.getElementById('msg')
    var imagem = window.document.getElementById('imagem')
    var text = window.document.getElementById('text')

    // Hora atual
    var data = new Date()
    var hora = data.getHours()
    var min = data.getMinutes()
    var seg = data.getSeconds()
    msg.innerHTML=`Agora são ${hora}:${min}:${seg} horas.` 

    if (hora >= 0 && hora <= 12) {
      //Bom dia
      imagem.src ='manha.png' 
      text.innerHTML=`Bom dia!!`
      document.body.style.background= 'rgb(241, 202, 93)'
    }else if (hora >= 13 && hora <= 18){
      //Boa tarde
      imagem.src ='tarde.png'
      text.innerHTML=`Boa tarde!!`
      document.body.style.background='rgb(255, 169, 9)'
    } else {
      //Boa noite
      imagem.src ='noite.png'
      text.innerHTML=`Boa noite!!`
      document.body.style.background='rgb(56, 54, 172)'
    }
}