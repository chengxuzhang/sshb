<?php
$this->title = '小程序审核配置';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/title', 'Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div id="censhorship-page">
    <div style="margin-bottom: 30px; color: #ccc;">请确认版本通过微信审核之后切换新版本的内容开关</div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th width="180">版本</th>
                <th width="80">状态</th>
                <th>创建时间</th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(ver, idx) in versions" :key="idx">
                <td>{{ver.version}}</td>
                <td>{{ver.status | status}}</td>
                <td>{{ver.create_time | datetime}}</td>
                <td>{{ver.release_time | datetime}}</td>
                <td>
                    <a href="javascript:void(0)" @click="release(ver)" v-if="ver.status === 0">切换正式版内容</a>
                    <a href="javascript:void(0)" @click="unrelease(ver)" v-if="ver.status === 1">切换审核版内容</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://cdn.bootcss.com/vue/2.6.10/vue.min.js"></script>
<script src="https://cdn.bootcss.com/axios/0.19.0-beta.1/axios.min.js"></script>


<script>
    Vue.filter('datetime', function(val) {
        if (val) {
            val = val.replace(' ', 'T') + '.000Z'
            var date = new Date(Date.parse(val));

            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            month = (month < 10 ? '0' : '') + month;
            var day = date.getDate();

            day = (day < 10 ? '0' : '') + day;
            var hour = date.getHours();
            hour = (hour < 10 ? '0' : '') + hour;

            var minute = date.getMinutes();
            minute = (minute < 10 ? '0' : '') + minute;

            var second = date.getSeconds();
            second = (second < 10 ? '0' : '') + second;

            return year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;
        } else {
            return '-';
        }
    });

    Vue.filter('status', function(val) {
        switch (val) {
            case 0:
                return '未审核';
            case 1:
                return '已发布';
            default:
                return val;
        }
    });

    new Vue({
        el: '#censhorship-page',
        data: function() {
            return {
                versions: null
            };
        },
        mounted: function() {
            var self = this;
            axios.get('/config/get-versions').then(function(resp) {
                self.versions = resp.data.data || [];
            });
        },
        methods: {
            release: function(ver) {
                if (confirm('确认版本审核通过之后再操作')) {
                    axios
                        .get('/config/release-version', {
                            params: {
                                id: ver.id
                            }
                        })
                        .then(function(resp) {
                            ver.status = 1;
                            ver.release_time = resp.data.data.release_time;
                            layer.msg('操作成功');

                        }).catch(function() {
                            layer.msg('操作失败');

                        });
                }
            },
            unrelease: function(ver) {
                if (confirm('确认版本审核通过之后再操作')) {
                    axios
                        .get('/config/unrelease-version', {
                            params: {
                                id: ver.id
                            }
                        })
                        .then(function() {
                            ver.status = 0;
                            ver.release_time = null;
                            layer.msg('操作成功');

                        }).catch(function() {
                            layer.msg('操作失败');

                        });
                }
            }
        }
    });
</script>