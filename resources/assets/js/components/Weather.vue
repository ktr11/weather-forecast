<template>
  <div>

      <div class="col-sm-offset-1 col-sm-10">
        <button type="button" v-on:click="showWeather" class="btn btn-default">send</button>
      </div>

    <div v-if="record == null">
      <table class="table">
        <colgroup>
          <col width="30%" />
          <col width="70%" />
        </colgroup>
        <tr>
          <th>date</th>
          <th>{{ record.date }}</th>
        </tr>
        <tr>
          <th>name</th>
          <th>{{ record.name }}</th>
        </tr>
        <tr>
          <th colspan="2">
            <img v-bind:src="'./img/icon' + record.icon + '.png'" />
          </th>
        </tr>
        <tr>
          <th>max&nbsp;temp</th>
          <th>{{ record.max_temp }}</th>
        </tr>
        <tr>
          <th>min&nbsp;temp</th>
          <th>{{ record.min_temp }}</th>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
        record:{}
    };
  },
  methods: {
    showWeather() {
      var area = document.getElementById("area").value;
      axios.post("/api/weather/" + area).then(function(res){
          alert(res.data.name);
          this.record = res.data;
      });

    }
  }
};
</script>
