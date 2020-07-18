<template>
    <div class="container">
        <div class="row">
            <div class="row">
                <!-- <div class="col-md-12">
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
                </div> -->

                <div class="col-md-12">
                    <DataTable :value="bufferPosts" :paginator="true" :rows="10"
                        paginatorTemplate="CurrentPageReport FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink RowsPerPageDropdown"
                        :rowsPerPageOptions="[10,20,50]"
                        currentPageReportTemplate="Showing {first} to {last} of {totalRecords}">
                        <Column field="group_info.name" header="Group Name"></Column>
                        <Column field="group_info.type" header="Group Type"></Column>
                        <Column header="Account Name">
                            <template #body="account_info">
                                <img :src="account_info.avatar" class="product-image" />
                            </template>
                        </Column>
                        <Column field="post_text" header="Post Text"></Column>
                        <Column field="created_at" header="Time"></Column>
                        <template #paginatorLeft>
                            <Button type="button" icon="pi pi-refresh" class="p-button-text" />
                        </template>
                        <template #paginatorRight>
                            <Button type="button" icon="pi pi-cloud" class="p-button-text" />
                        </template>
                    </DataTable>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    // import DataTable from 'primevue/datatable';
    // import Column from 'primevue/column';
    // import ColumnGroup from 'primevue/columngroup'; 

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
                axios.get('/buffer-list')
                    .then((res) => {
                        console.log("res.............", res.data);
                        this.bufferPosts = res.data.data;
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