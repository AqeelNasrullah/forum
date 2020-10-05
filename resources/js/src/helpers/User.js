import Token from './Token'
import AppStorage from './AppStorage'

class User {
    login(form_data) {
        axios.post('/api/auth/login', form_data).then(res => this.afterLogin(res.data)).catch(error => console.log(error.response.data))
    }

    afterLogin(token) {
        const hasToken = Token.payload(token.access_token)

        if (hasToken) {
            AppStorage.store(token.name, token.access_token)
        }
    }

    hasToken() {
        const storedToken = AppStorage.getToken()
        if (storedToken) {
            return Token.isValid(storedToken) ? true : false
        }
        return false
    }

    loggedIn() {
        return this.hasToken()
    }

    logout() {
        AppStorage.remove()
    }

    getName() {
        if (this.loggedIn()) {
            return AppStorage.getName()
        }
    }

    getId() {
        if (this.loggedIn()) {
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }
}

export default new User()
