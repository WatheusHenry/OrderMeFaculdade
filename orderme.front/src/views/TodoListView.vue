<template>
  <div class="d-flex" style="width: 80vw">
    <div class="position-absolute top-50 start-50 translate-middle">
      <h1 class="top-0 text-center" style="font-weight: bold">To do List</h1>
      <div class=" ">
        <div class="mt-5 custom-background mb-5">
          <DataTable
            scrollable
            class="bg-white shadow custom-datatable"
            v-model:selection="selectedProduct"
            :value="tarefas"
            dataKey="id"
            style="border: 10px solid black; height: 30rem"
          >
            <Column selectionMode="multiple" style="width: 5rem"></Column>
            <Column field="id" header="Id" class="" style="width: 2rem"></Column>
            <Column field="tarefa" header="Tarefa"></Column>
            <Column :exportable="false" style="min-width: 8rem">
              <template #body="slotProps">
                <Button
                  icon="pi pi-times"
                  outlined
                  rounded
                  severity="danger"
                  @click="deleteTask(slotProps)"
                />
              </template>
            </Column>
          </DataTable>
        </div>

        <button class="button-teste m-auto" icon="pi pi-external-link" @click="visible = true">
          Adiconar tarefa
        </button>

        <Dialog
          v-model:visible="visible"
          modal
          header="Header"
          :style="{ width: '30rem' }"
          :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
          class="bg-white"
        >
          <div class="flex">
            <label for="taskName">Tarefa:</label>
            <InputText v-model="newTask.tarefa" id="taskName" class="p-inputtext" />
          </div>
          <div class="mt-2">
            <button @click="addTask" class="p-button">Adicionar</button>
          </div>
        </Dialog>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import Dialog from 'primevue/dialog'

onMounted(() => {})

const tarefas = ref([
  { id: 1, tarefa: 'Product 1' },
  { id: 2, tarefa: 'Product 2' }
  // Adicione mais dados fictícios conforme necessário
])
const visible = ref(false)

const selectedProduct = ref()
const newTask = ref({
  code: '',
  name: ''
})
const displayModal = ref(false)

const addTask = () => {
  const id = tarefas.value.length + 1
  tarefas.value.push({ id, ...newTask.value })
  newTask.value = { tarefa: '' }
  displayModal.value = false
}
const deleteTask = () => {
  tarefas.value = tarefas.value.filter((val) => val.id !== tarefa.value.id)
  tarefa.value = {}
}
</script>

<style scoped>
.custom-background {
  /* background-color: #8ea8bf; */
  width: 50rem;
  height: 30rem;
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

.custom-datatable .p-datatable-thead {
  background-color: #007bff; /* Cor de fundo do cabeçalho */
  color: white; /* Cor do texto do cabeçalho */
}

.custom-datatable .p-datatable-tbody {
  font-size: 16px; /* Tamanho da fonte das linhas */
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
