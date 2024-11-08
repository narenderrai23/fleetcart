Alpine.data("NewsletterPopup", () => ({
    email: "",
    subscribing: false,
    subscribed: false,
    error: "",
    modal: bootstrap.Modal.getOrCreateInstance("#newsletterPopup"),

    init() {
        this.$watch("email", () => {
            this.error = "";
        });

        this.showNewsletterPopup();
    },

    showNewsletterPopup() {
        setTimeout(() => {
            this.modal.show();
        }, 2000);
    },

    disableNewsletterPopup() {
        this.modal.hide();

        axios.delete(route("storefront.newsletter_popup.destroy"));
    },

    subscribe() {
        if (this.subscribing || this.subscribed) {
            return;
        }

        this.subscribing = true;

        document.activeElement.blur();

        axios
            .post(route("subscribers.store"), {
                email: this.email,
            })
            .then(() => {
                this.email = "";
                this.subscribed = true;
            })
            .catch((error) => {
                if (error.response.status === 422) {
                    this.error = error.response.data.errors.email[0];

                    this.$refs.form.elements[0].focus();

                    return;
                }

                this.error = error.response.data.message;
            })
            .finally(() => {
                this.subscribing = false;
            });
    },
}));