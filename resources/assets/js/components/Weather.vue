<template>
  <div>
    <div class="col-sm-offset-1 col-sm-10">
      <button type="button" @click="showWeather" class="btn btn-default">send</button>
    </div>
    <div>
      <table class="table">
        <colgroup>
          <col width="30%" />
          <col width="70%" />
        </colgroup>
        <tr>
          <th>date</th>
          <th>{{ record.forecast_date }}</th>
        </tr>
        <tr>
          <th>name</th>
          <th>{{ record.name }}</th>
        </tr>
        <tr>
          <th>weather</th>
          <th>
            <img v-bind:src="'./img/icon/' + record.icon + '.png'" alt=""/>
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
  name: 'record',
  data: function() {
    return {
      record: {}
    };
  },
  methods: {
    showWeather() {
      let self = this;
      var area = document.getElementById("area").value;
      axios.post("/api/weather/" + area).then(function(res) {
        self.record = res.data;
      });
    }
  }
};
</script>
