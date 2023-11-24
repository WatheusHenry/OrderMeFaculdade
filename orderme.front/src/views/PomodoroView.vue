<template>
    <div class="d-flex" style="width: 80vw">
      <div>
        <div class="position-absolute top-0 mt-3 start-5">
          <img src="/src/assets/Logo.svg" alt="Order.me" style="width: 10rem" />
        </div>
        <div class="position-absolute top-0 end-0" style="margin-right: 2rem">
          <div class="d-flex mt-3">
            <a href="" class="mx-4 espacamento">Sobre nós</a>
            <a href="" class="mx-4 espacamento">Comunidades</a>
            <a href="" class="mx-4 espacamento">Funcionalidades</a>
          </div>
        </div>
      </div>
      <div class="position-absolute top-50 start-50 translate-middle">
        <div class=" ">
          <div class="card shadow mt-5 custom-background mb-5" style="border: 10px solid black">
            <div class="card-body mx-3">
              <h4 class="card-title text-center mt-5" style="color: white; font-weight: bold">
                Pomodoro
              </h4>
              <div class="d-flex justify-content-center">
                <button class="button-teste">Iniciar Pomodoro</button>
              </div>
              <!-- Outros elementos da tela Pomodoro podem ser adicionados aqui -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    // Adicione lógica específica da tela Pomodoro aqui, se necessário
  };
  </script>
  
  <style scoped>
  .custom-background {
    background-color: #8ea8bf;
    width: 23rem;
    height: 35rem;
  }
  
  .button-teste {
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
  
  .button-teste a:active {
    top: 10px;
    background-color: #fed78c;
    -webkit-box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3px 0 #fed78c;
    -moz-box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3px 0 #fed78c;
    box-shadow:
      inset 0 1px 0 #ffe5c4,
      inset 0 -3px 0 #fed78c;
  }
  
  .button-teste:after {
    content: '';
    height: 100%;
    width: 100%;
    padding: 4px;
    position: absolute;
    left: -4px;
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
  