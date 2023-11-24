
<template>
  <div>
    <div style="text-align: center; margin-top: 3rem; margin-left: 28rem;">
      <h1 style="text-align: center; font-weight: bolder; color: black;">Perfil</h1>
    </div>
    <section>
      <div class="d-flex justify-content-center">
        <div
          style="
            border: 10px solid black;
            margin-top: 5rem;
            width: 55rem;
            background-color: azure;
            margin-left: 30rem;
          "
        >
          <div class="d-flex align-items-center" style="padding: 30px;">
            <div style="flex: 1;">
              <h2 style="font-weight: bolder; margin-bottom: 10px; color: black;">Nome</h2>
              <div class="mb-3">
                <input type="text" class="form-control" id="nomeInput" aria-describedby="nomeHelp" style="border: 4px solid black; width: 50%;">
              </div>
              <h2 style="font-weight: bolder; color: black;">E-mail</h2>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 4px solid black; width: 70%;">
              </div>
            </div>
            <div style="margin-left: 20px; margin-right: 20px;">
              <img src="/src/assets/person-circle.svg" alt="Imagem" style="width: 10rem; height: auto;">
            </div>
          </div>
          <div ontouchstart="">
            <div class="d-flex justify-content-center">
              <button class="button-perfil">Editar</button>
            </div>
          </div>

          <div style="display: flex; border: 2px solid black; margin-top: 2rem; padding: 3rem; width: 97%; margin-left: 14px; margin-bottom: 20px;">
       
            <div style="display: flex; align-items: center; margin-right: 5%; margin-left: 2rem;">
              <img src="/src/assets/bookmark-fill.svg" alt="salvos" style="width: 30px; height: 50px; margin-right: 5px;">
              <p style="font-weight: bolder; color: black; margin: 0;">Publicações Salvas</p>
            </div>

           
            <div style="display: flex; align-items: center; margin-left: 15%;">
              <img src="/src/assets/tags.svg" alt="salvos" style="width: 30px; height: 50px; margin-right: 2px;">
              <p style="font-weight: bolder; color: black; margin: 0;">Tópicos Seguidos</p>
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
  