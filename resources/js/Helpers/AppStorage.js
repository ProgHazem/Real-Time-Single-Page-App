class AppStorage {

    //set in local storage token
    storeToken(token){
         localStorage.setItem('token', token);
    }
    //set in local storage user name
    storeUser(user){
         localStorage.setItem('user', user);
    }

    // function to call the setter function token & user

    store(user, token){
        this.storeToken(token);
        this.storeUser(user);
    }

    // function to clear local storage
    clear(){
        localStorage.removeItem('token');
        localStorage.removeItem('user');
    }

    // getter function token
    getToken() {
        localStorage.getItem('token');
    }

    // getter function user name
    getUser(){
        localStorage.getItem('user');
    }
}

export default AppStorage = new AppStorage();