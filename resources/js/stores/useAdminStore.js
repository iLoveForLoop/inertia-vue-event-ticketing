import { defineStore } from "pinia";

export const useAdminStore = defineStore("addmin", {
    state: () => ({
        currentPage: "Test",
    }),
    actions: {
        setCurrentPage(page) {
            this.currentPage = page;
        },
    },
});
