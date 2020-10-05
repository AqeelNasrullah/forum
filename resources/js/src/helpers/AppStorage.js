class AppStorage {
    setToken(token) {
        localStorage.setItem('token', token)
    }

    setName(name) {
        localStorage.setItem('name', name)
    }

    store(name, token) {
        this.setName(name)
        this.setToken(token)
    }

    getName() {
        return localStorage.getItem('name')
    }

    getToken() {
        return localStorage.getItem('token')
    }

    remove() {
        localStorage.removeItem('name')
        localStorage.removeItem('token')
    }
}

export default new AppStorage()
