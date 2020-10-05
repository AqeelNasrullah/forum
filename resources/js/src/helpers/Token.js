class Token {
    payload(token) {
        const payload = token.split('.')[1]
        return JSON.parse(atob(payload))
    }

    isValid(token) {
        const load = this.payload(token)
        return load.iss == "http://127.0.0.1:8000/api/auth/login" ? true : false
    }
}

export default new Token()
