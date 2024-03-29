import AppForm from "../app-components/Form/AppForm";

Vue.component("post-form", {
    mixins: [AppForm],
    data: function () {
        return {
            form: {
                title: "",
                subtitle: "",
                description: "",
                enabled: false,
            },
            mediaCollections: ["cover", "gallery", "pdf"],
        };
    },
});
