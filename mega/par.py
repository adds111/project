import openai
import mysql.connector


config = {
    "user": "root",
    "password": "1133",
    "host": "localhost",  
    "database": "code",
}


connection = mysql.connector.connect(**config)
cursor = connection.cursor()
mem = "select front from response"
cursor.execute(mem)
rec = cursor.fetchall()
print(rec)

api_key = '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'


dialogue = [

    {"role": "user", "content": rec[0][0] }
    
]


if rec != '':
    response = openai.ChatCompletion.create(
        model="gpt-3.5-turbo",
        messages=dialogue,
        api_key=api_key
        )
else:
    print('null')


assistant_response = response['choices'][0]['message']['content']


print(assistant_response)
sel = f"update response set back = '{assistant_response}' where id = 1"

cursor.execute(sel)
connection.commit()
