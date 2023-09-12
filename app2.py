# from flask import Flask, render_template, request, jsonify
# from flask import Flask, render_template, url_for, redirect
# from flask_sqlalchemy import SQLAlchemy
# from flask_login import UserMixin, login_user, LoginManager, login_required, logout_user, current_user
# from flask_wtf import FlaskForm
# from wtforms import StringField, PasswordField, SubmitField
# from wtforms.validators import InputRequired, Length, ValidationError
# from flask_bcrypt import Bcrypt

# from deta import Deta
# import pandas as pd
# deta = Deta("a0tvwsoxubc_44XnSpg5yXPHGBLQ5a1HohuM2LR4eTWF")
# users_db = deta.Base("Users")

# # Retrieve all records from the database
# all_users = users_db.fetch().items

# # Print retrieved user data
# data_list = []
# for user in all_users:
#     data_list.append({
#         "key": user["key"],
#         "email": user["email"],
#         "name": user["name"],
#         "password": user["password"]
#     })

# df = pd.DataFrame(data_list)

# app = Flask(__name__)
# db = SQLAlchemy(app)
# bcrypt = Bcrypt(app)
# app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database.db'
# app.config['SECRET_KEY'] = 'thisisasecretkey'

# login_manager = LoginManager()
# login_manager.init_app(app)
# login_manager.login_view = 'login'


# # New code

# app = Flask(__name__)

# # Initialize your Deta project using your project key


# @app.route('/')
# def home():
#     return render_template('index.html')


# @app.route('/register', methods=['POST'])
# def register():
#     email = request.form['email']
#     name = request.form['name']
#     password = request.form['password']

#     # Check if the user already exists
#     existing_user = users_db.get(email)
#     if existing_user:
#         return jsonify({'success': False, 'message': 'Email already registered'})

#     # Add the user to the databaseF
#     users_db.put({"key": email, "email": email,
#                  "name": name, "password": password})
#     return jsonify({'success': True, 'message': 'Registration successful'})


# @app.route('/login', methods=['POST'])
# def login():
#     email = request.form['email']
#     password = request.form['password']

#     # Check if the user exists
#     user = users_db.get(email)
#     if user and user["password"] == password:
#         return jsonify({'success': True, 'message': 'Login successful'})
#     else:
#         return jsonify({'success': False, 'message': 'Invalid email or password'})


# if __name__ == '__main__':
#     app.run(debug=True)


# # OLD CODE
# @login_manager.user_loader
# def load_user(user_id):
#     return User.query.get(int(user_id))


# class User(db.Model, UserMixin):
#     email = db.Column(db.String(50), primary_key=True, unique=True)
#     name = db.Column(db.String(50), nullable=False)
#     password = db.Column(db.String(50), nullable=False)


# class RegisterForm(FlaskForm):

#     email = StringField(validators=[InputRequired(), Length(
#         min=4, max=50)], render_kw={"placeholder": "Email"})
#     name = StringField(validators=[InputRequired(), Length(
#         min=1, max=50)], render_kw={"placeholder": "Name"})
#     password = PasswordField(validators=[InputRequired(), Length(
#         min=8, max=50)], render_kw={"placeholder": "Password"})
#     submit = SubmitField('Register')

#     def validate_username(self, username):
#         existing_user_username = User.query.filter_by(email=email.data).first()
#         if existing_user_username:
#             raise ValidationError(
#                 'That username already exists. Please choose a different one.')


# @ app.route('/register', methods=['GET', 'POST'])
# def register():
#     form = RegisterForm()

#     if form.validate_on_submit():
#         hashed_password = bcrypt.generate_password_hash(
#             form.password.data).decode('utf-8')
#         new_user = User(email=form.email.data, password=hashed_password)
#         db.session.add(new_user)
#         db.session.commit()
#         registration_success = True
#         return render_template('FORMsignup.html', form=form, registration_success=registration_success)

#     return render_template('FORMsignup.html', form=form)


# class LoginForm(FlaskForm):
#     username = StringField(validators=[
#                            InputRequired(), Length(min=4, max=20)], render_kw={"placeholder": "Username"})

#     password = PasswordField(validators=[
#                              InputRequired(), Length(min=8, max=20)], render_kw={"placeholder": "Password"})

#     submit = SubmitField('Login')


# @app.route('/')
# def home():
#     return render_template('index.html')


# @app.route('/login', methods=['GET', 'POST'])
# def login():
#     form = LoginForm()
#     if form.validate_on_submit():
#         user = User.query.filter_by(username=form.username.data).first()
#         if user:
#             if bcrypt.check_password_hash(user.password, form.password.data):
#                 login_user(user)
#                 return redirect(url_for('dashboard'))
#     # return render_template('login.html', form=form)
#     return render_template('index.html', form=form)


# if __name__ == "__main__":
#     app.run(debug=True)
#     # app.run(port=4996)
