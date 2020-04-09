<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component. Message: {{ message }}
                        <ul>
                            <li v-for="data in datas" :key="data.id" >
                                {{ data.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['datas'],
        data: () => ({
            message: 'Php Maroc'
        }),
        mounted() {
            console.log(this.datas)
        }
    }
</script>
