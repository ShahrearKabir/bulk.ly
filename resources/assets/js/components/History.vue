<template>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover social-accounts"> 
                        <thead> 
                            <tr>
                                <th>Group Name</th> 
                                <th>Group Type</th> 
                                <th>Account Name</th> 
                                <th>Post Text</th> 
                                <th>Time</th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                                <tr v-for="bufferPost in bufferPosts" :key="bufferPost.id">
                                    <td>{{ bufferPost.group_info && bufferPost.group_info.name }}</td>
                                    <td>{{ bufferPost.group_info && bufferPost.group_info.type }}</td>
                                    <td>{{ bufferPost.account_info && bufferPost.account_info.name }}</td>
                                    <td width="350">
                                        <div class="media">
								            <div class="media-left">
                                            {{ bufferPost.post_text }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ bufferPost.created_at }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
	export default {
        data() {
            return {
                bufferPosts: [],
            };
        },
        
        mounted() {
            this.fetchBufferList();
        },
        
        methods: {
            fetchBufferList() {
                axios.get('api/buffer-list')
                    .then((res) => {
                        console.log("res.............", res.data);
                        this.bufferPosts = res.data;
                    })
			        .catch((err) => console.error(err));;
            },
 
            // createTask() {
            //     axios.post('api/tasks', this.task)
            //         .then((res) => {
            //             this.task.body = '';
            //         })
            //         .catch((err) => console.error(err));
            // },
 
            // deleteTask(id) {
            //     axios.delete('api/tasks/' + id)
            //         .then((res) => {
            //             this.fetchTaskList()
            //         })
            //         .catch((err) => console.error(err));
            // },
        }
    }
</script>