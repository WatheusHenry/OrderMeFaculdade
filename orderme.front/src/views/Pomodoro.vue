<template>
  <div style="outline: 0.6rem black solid;">
    <div class="card" :style="{ 'background-color': isBreak ? 'lightblue' : 'white' }" style="width: 70rem;">
      <div class="card-body" style="display: flex; flex-direction: row; align-items: center; align-content: center; flex-wrap: wrap; justify-content: space-around;">
        <div style="display: flex; flex-direction: column; align-items: center;">
          <h1>Pomodoro Timer</h1>
          <h5 class="card-title">{{ currentPhase }}</h5>
        </div>
        <div class="timer">
          <span class="time-segment">{{ formatTime(minutes) }}</span>
          <span class="time-segment">:</span>
          <span class="time-segment">{{ formatTime(seconds) }}</span>
        </div>
        <div style="display: flex; gap: 1rem; flex-direction: column;">
          <button type="button" class="btn" :class="isTimerRunning ? 'btn-danger' : 'btn-success'" @click="toggleTimer">
            {{ isTimerRunning ? 'Parar' : 'Iniciar' }}
          </button>
        </div>
      </div>
<!--      <div>-->
<!--        <p>Quantidade de Ciclos Pomodoro Completados: {{ pomodoroCycles }}</p>-->
<!--      </div>-->
    </div>
    <div>
      <DataTable :value="Evo" tableStyle="min-width: 50rem">
        <template #header>
          <div class="d-flex" style="gap: 0.8rem;">
            <Button label="Salvar ciclo" severity="success" class="btn btn-outline-primary" @click="SalvarEvolucao"></Button>
          </div>
        </template>
        <template #empty> Nenhum evento encontrado </template>
        <Column field="Data" header="Data"></Column>
        <Column field="Ciclos" header="Ciclos"></Column>
      </DataTable>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      timerValue: 0,
      timerId: null,
      currentPhase: "Trabalho",
      workTime: 25 * 60,
      breakTime: 5 * 60,
      minutes: 0,
      seconds: 0,
      isBreak: false,
      isTimerRunning: false,
      pomodoroCycles: 0,
      Evo: [],
    };
  },
  methods: {
    formatTime(time) {
      return time.toString().padStart(2, '0');
    },
    toggleTimer() {
      if (this.isTimerRunning) {
        this.stopPomodoro();
      } else {
        this.startPomodoro();
      }
    },
    startPomodoro() {
      if (!this.isTimerRunning) {
        this.isTimerRunning = true;
        this.timerValue = this.isBreak ? this.breakTime : this.workTime;
        this.timerId = setInterval(() => {
          this.timerValue--;
          if (this.timerValue <= 0) {
            this.stopPomodoro();
            this.togglePhase();
          }
          this.minutes = Math.floor(this.timerValue / 60);
          this.seconds = this.timerValue % 60;
        }, 1000);
      }
    },
    stopPomodoro() {
      clearInterval(this.timerId);
      this.isTimerRunning = false;
    },
    togglePhase() {
      this.isBreak = !this.isBreak;
      this.currentPhase = this.isBreak ? "Descanso" : "Trabalho";
      if (!this.isBreak) {
        this.pomodoroCycles++;
      }
      this.startPomodoro();
    },
    SalvarEvolucao() {
      const data = {
        'Ciclos': this.pomodoroCycles
      }
      // axios.post('')
    }
  },
};
</script>

<style>
.timer {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
}
.time-segment {
  display: inline-block;
  padding: 0 10px;
}

html {
  overflow: hidden;
}
</style>
