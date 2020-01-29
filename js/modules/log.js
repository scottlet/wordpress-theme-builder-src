function Logger() {
    if (typeof console !== 'undefined') {
        return msg => {
            console.log(msg);
        };
    }

    if ((window || {}).alert) {
        return msg => {
            window.alert(msg); //eslint-disable-line
        };
    }
}

export default Logger();
