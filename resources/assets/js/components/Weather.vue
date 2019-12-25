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
          <th>{{ ret_obj.today }}</th>
        </tr>
        <tr>
          <th>name</th>
          <th>{{ ret_obj.record.name }}</th>
        </tr>
        <tr>
          <th>weather</th>
          <th>
            <img v-bind:src="'./img/icon/' + ret_obj.record.icon + '.png'" alt />
          </th>
        </tr>
        <tr>
          <th>max&nbsp;temp</th>
          <th>{{ ret_obj.record.max_temp }}</th>
        </tr>
        <tr>
          <th>min&nbsp;temp</th>
          <th>{{ ret_obj.record.min_temp }}</th>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ret_obj',
  data: function() {
    return {
      date: '',
      name: '',
      icon: '',
      max_temp: '',
      min_temp: ''  
    };
  },
  methods: {
    showWeather() {
      let self = this;
      var area = document.getElementById("area").value;
      axios.post("/api/weather/" + area).then(function(res) {
        self.ret_obj = res.data;
      });
    }
  }
};
</script>
