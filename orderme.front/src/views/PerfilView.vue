<template>
    <div>
      <div style="text-align: center;">
        <h1 style="text-align: center;">Perfil</h1>
      </div>
      <section>
        <div class="d-flex justify-content-between">
          <div class="d-flex justify-content-between">
            <!-- Seu elemento de cartão -->
            <div
              style="
                border: 10px solid black;
                margin-left: 10rem;
                margin-top: 5rem;
                height: 80vh;
                width: 50rem;
                background-color: azure;
              "
            >
            <div class="d-flex align-items-center" style="padding: 30px;">
                <div>
                    <h2 style="font-weight: bolder; margin-bottom: 10px;">Nome</h2>
                    <div class="mb-3">
                    <input type="text" class="form-control" id="nomeInput" aria-describedby="nomeHelp" style="border: 4px solid black; width: 300px;">
                    </div>
                    <h2 style="font-weight: bolder;">E-mail</h2>
                    <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 4px solid black; width: 400px;">
                    </div>
                </div>
                <div style="margin-left: auto; margin-right: 20px;">
                    <img src="/src/assets/person-circle.svg" alt="Imagem" style="width: 10rem; height: auto;">
                </div>
                </div>

              <div ontouchstart="">
                  <div class="d-flex justify-content-center">
                    <button class="button-perfil">Editar</button>
                  </div>
            </div>
            <div class="position-fixed top-0 end-0" style="margin-top: 2rem; margin-right: 2rem;">
        <div class="position-fixed top-0 start-0" style="height: 100vh; width: 2rem; background-color: #FED78C; padding: 2rem;">
          <div class="d-flex flex-column align-items-center mt-2">
            <a href="pomodoro" class="mx-4 espacamento"> <img src="/src/assets/clock.svg"></a>
            <a href="calendario" class="mx-4 espacamento"> <img src="/src/assets/calendar-date.svg"></a>
            <a href="list" class="mx-4 espacamento"> <img src="/src/assets/list.svg"></a>
            <a href="comunidade" class="mx-4 espacamento"> <img src="/src/assets/people-fill.svg"></a>
            <a href="" class="mx-4 espacamento"> <img src="/src/assets/share-fill.svg"></a>
            <a href="perfil" class="mx-4 espacamento"> <img src="/src/assets/person-circle.svg"></a>
        
          </div>
        </div>

</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </template>
  
  

  
  <style scoped>
  .custom-background {
    background-color: #8ea8bf;
    width: 15rem;
  }
  
  .button-perfil {
    position: relative;
    display: inline-block;
    margin: 20px;
    margin-right: 20rem;
  }
  
  .button-perfil {
    color: black;
    font-family: Helvetica, sans-serif;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    background-color: #fed78c;
    display: block;
    position: relative;
    padding: 5px 20px;
  
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    text-shadow: 0px 1px 0px #000;
    filter: dropshadow(color=#000, offx=0px, offy=1px);
  
    -webkit-box-shadow:
      inset 0 1px 0 #ffe5c4,
      0 10px 0 #000000;
    -moz-box-shadow:
      inset 0 1px 0 #ffe5c4,
      0 10px 0 #000000;
    box-shadow:
      inset 0 1px 0 #ffe5c4,
      0 10px 0 #000000;
  
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
  
  .button-perfil a:active {
    top: 10px;
    background-color: #fed78c;
  
    -webkit-box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3px 0 #fed78c;
    -moz-box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3pxpx 0 #fed78c;
    box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3px 0 #fed78c;
  }
  
  .button-perfil:after {
    content: '';
    height: 100%;
    width: 100%;
    padding: 4px;
    position: absolute;
  
    z-index: -1;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
  
  .espacamento {
    display: flex;
    margin-top: 1rem;
    margin-right: 20px;
    text-decoration: none;
    color: #000;
    font-weight: bolder;
  }
  </style>
  