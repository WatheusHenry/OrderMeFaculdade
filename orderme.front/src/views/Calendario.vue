<template>
  <main style="height: 85vh; background-color: #B5D6F3;">
    <Toast/>
    <ConfirmDialog></ConfirmDialog>
    <div class="d-flex justify-content-center">
      <h1 style="font-family: 'Montserrat', sans-serif; padding: 1rem; margin: 0;">Calendario</h1>
    </div>
    <div class="d-flex justify-content-evenly">
      <Calendar
          class="calendario" v-model="this.dadosAlt.Data" inline showWeek
          style="width: 30rem; margin-right: 3rem; outline: 0.6rem black solid;"
      />
      <div>
        <DataTable :value="Eventos" v-model="selectEvento" tableStyle="min-width: 50rem"
                   style="outline: 0.6rem black solid;">
          <template #header>
            <div class="d-flex" style="gap: 0.8rem;">
              <Button label="Novo" severity="success" class="btn btn-outline-primary"
                      @click="AbrirModal()"></Button>
              <Button label="Deletar" severity="danger" class="btn btn-outline-danger"
                      @click="confirmDeleteSelected()"></Button>
            </div>
          </template>
          <template #empty> Nenhum evento encontrado</template>
          <Column field="Data" header="Data"></Column>
          <Column field="Evento" header="Evento"></Column>
        </DataTable>
      </div>
    </div>
    <div>
      <Dialog :visible="modal" :style="{width: '450px'}" header="Adicionar evento" :modal="true" class="p-fluid">
        <div class="mb-3">
          <span><strong>Dia do evento</strong></span>
          <Calendar v-model="this.dadosAlt.Data" dateFormat="dd/mm/yy" disabled/>
        </div>
        <div>
          <span><strong>Nome do evento</strong></span>
          <InputText type="text" v-model="dadosAlt.Evento" />
        </div>
        <template #footer>
          <Button label="Cancelar" text @click="FecharModal"></Button>
          <Button label="Salvar" text @click="salvarEvento"></Button>
        </template>
      </Dialog>
    </div>
  </main>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      Eventos: null,
      selectEvento: null,
      modal: false,
      dadosAlt: {
        Data: null,
        Evento: null,
      },
    }
  },
  methods: {
    AbrirModal() {
      if (this.dadosAlt.Data == null) {
        this.$toast.add({
          severity: 'warn',
          summary: 'Data',
          detail: 'Selecione uma data antes de Prosseguir',
          life: 2000,
          closable: false
        });
      } else {
        this.modal = true
      }
    },
    defineName(args){
      console.log(args)
    },
    FecharModal() {
      this.modal = false;
    },
    salvarEvento() {
      console.log(this.dadosAlt);
      if (this.dadosAlt.Evento != null) {
        // axios.post('eventos', this.dadosAlt).then((res) => {
        //
        // })
      } else {
        this.$toast.add({severity: 'warn', detail: 'Não é possivel salvar algo sem nome', life: 2000});
      }
    },
    confirmDeleteSelected() {
      this.$confirm.require({
        message: 'Você quer mesmo apagar esse evento/registro?',
        header: "Atenção!",
        icon: 'pi pi-exclamation-triangle',
        acceptClass: 'p-button-danger',
        closable: false,
        accept: () => {
          this.$toast.add({
            severity: 'info',
            summary: 'Confirmed',
            detail: 'Record deleted',
            life: 3000,
            closable: false
          });
        },
        reject: () => {
          this.$toast.add({
            severity: 'error',
            summary: 'Rejected',
            detail: 'You have rejected',
            life: 3000,
            closable: false
          });
        }
      });
    }
  },
  mounted() {

  },
}
</script>

<style>
ol, ul {
  padding: 5px;
}

.p-toast .p-toast-message .p-toast-message-content {
  display: flex;
  align-items: center;
  gap: 1rem;
}
</style>