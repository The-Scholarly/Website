from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField
from wtforms.validators import InputRequired, Length, ValidationError

from deta import Deta
from flask_bcrypt import Bcrypt

deta = Deta("a0tvwsoxubc_44XnSpg5yXPHGBLQ5a1HohuM2LR4eTWF")
users_db = deta.Base("Users")
all_users = users_db.fetch().items


def login_is_successful(email, password):
    user = users_db.get(email)
    print(user["password"])
    print(password)
    if user and user["password"] == password:

        return True
    else:
        return False


def registration_is_successful(email, name, password):
    print(email)
    existing_user = users_db.get(email.encode('utf-8'))
    if existing_user:
        return False
    users_db.put({"key": email, "email": email,
                 "name": name, "password": password})
    return True





# if __name__ == '__main__':
#     app.run(debug=True)

from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

# Existing code...

# Route to render the home page
@app.route('/', methods=['GET'])
def home():
    return render_template('home.html')

# Route to handle registration API call
@app.route('/register', methods=['POST'])
def register():
    email = request.form.get('email')
    password = request.form.get('password')
    name = request.form.get('name')
    
    if registration_is_successful(email, name, password):
        return jsonify({'message': 'Registration Successful'})
    else:
        return jsonify({'error': 'Registration Failed'})

# Route to handle login API call
@app.route('/login', methods=['POST'])
def login():
    email = request.form.get('email')
    password = request.form.get('password')

    if login_is_successful(email, password):
        return jsonify({'message': 'Login Successful'})
    else:
        return jsonify({'error': 'Login Failed'})

@app.route('/sidebar', methods=['GET', 'POST'])
def sidebar():
    return render_template('sidebar.html')


@app.route('/header', methods=['GET', 'POST'])
def header():
    return render_template('header.html')

if __name__ == '__main__':
    app.run(debug=True)

