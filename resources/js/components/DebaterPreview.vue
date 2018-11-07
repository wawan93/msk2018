<template>
    <div class="row debater-preview pl-2 my-3">
        <div class="col-sm-5 col-12 col-left p-0">
            <div class="py-3 px-4">
                <h5 class="preview-title">
                    {{ debater.last_name }}
                    <br>
                    <small>{{ debater.first_name }}</small>
                    <br>
                    <small>{{ debater.middle_name }}</small>
                </h5>
            </div>
            <img :src="debater.photo_url" :alt="debater.full_name" class="img-fluid"/>
        </div>
        <div class="col-sm-7 col-12 col-right">
            <h6 class="my-3">О себе</h6>
            <p>{{ debater.about }}</p>
            <h6>Программа</h6>
            <p>{{ debater.about }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['debater']
    }
</script>