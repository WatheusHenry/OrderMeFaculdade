<template>
  <section>
    <div class="d-flex justify-content-between">
      <div class="d-flex justify-content-between">
        <div
          style="
            border: 10px solid black;
            margin-left: 45vh;
            height: 80vh;
            width: 50rem;
            margin-left: 10rem;
            margin-top: 5rem;
            background-color: azure;
          "
        ></div>

        <div class="d-flex" style="margin-top: 5rem; margin-left: 10rem">
          <div class="">
            <div class="card-body " style="width: 30rem">
              <button class="button-teste text-center" style="font-weight: bold;width: 25rem;">
                Registro
              </button>
              <form>
                <div class="form-group input-group mb-4">
                  <input
                    v-model="name"
                    class="form-control"
                    placeholder="Nome"
                    type="text"
                    style="border: 4px solid black; margin-top: 50px"
                  />
                </div>
                <div class="form-group input-group mb-4">
                  <input
                    v-model="email"
                    class="form-control"
                    placeholder="E-mail"
                    type="email"
                    style="border: 4px solid black"
                  />
                </div>
                <div class="form-group input-group mb-4">
                  <input
                    v-model="password"
                    class="form-control"
                    placeholder="Senha"
                    type="password"
                    style="border: 4px solid black"
                  />
                </div>
                <div class="form-group input-group mb-4">
                  <input
                    v-model="passwordConfirmation"
                    class="form-control"
                    placeholder="Repetir Senha"
                    type="password"
                    style="border: 4px solid black"
                  />
                </div>
                <div ontouchstart="">
                  <div class="d-flex justify-content-center">
                    <button class="button-teste" @click="register">Registrar</button>
                  </div>
                </div>
                <div class="text-center">
                  <p style="color: white; margin-top: 2rem; font-weight: bold">Já tem cadastro?</p>
                  <RouterLink class="h-10" style="color: #fed78c; font-weight: bold" to="/login"
                    >Fazer Login!</RouterLink
                  >
                </div>
              </form>
              <div
                v-if="registrationStatus === 'success'"
                style="color: green; text-align: center; margin-top: 1rem"
              >
                Registro bem-sucedido!
              </div>
              <div
                v-if="registrationStatus === 'error'"
                style="color: red; text-align: center; margin-top: 1rem"
              >
                Falha no registro. Verifique os dados e tente novamente.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      name: '',
      email: '',
      password: '',
      passwordConfirmation: '',
      registrationStatus: null
    }
  },
  methods: {
    register() {
      const formData = {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.passwordConfirmation
      }

      axios
        .post('/register', formData)
        .then((response) => {
          if (response.data.status) {
            this.registrationStatus = 'success'
            this.$router.push('/List')
          } else {
            this.registrationStatus = 'error'
          }
        })
        .catch((error) => {
          console.error('Erro de registro:', error)
          this.registrationStatus = 'error'
        })
    }
  }
}
</script>

<style scoped>
.custom-background {
  background-color: #8ea8bf;
  width: 15rem;
}

.button-teste {
  position: relative;
  display: inline-block;
  margin: 20px;
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
    inset 0 -3pxpx 0 #fed78c;
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
