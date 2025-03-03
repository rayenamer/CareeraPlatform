def chatbot_response(user_input):
    # Convert input to lowercase for case-insensitive comparison
    user_input = user_input.lower()

    if "hi" in user_input:
        return "Hello, how can I help you?"
    elif "i want u to help me" in user_input:
        return "Just give me your question."
    else:
        return "Sorry, I didn't understand that. Can you ask something else?"

# Main program loop
if __name__ == "__main__":
    print("Chatbot: Hi, type 'exit' to end the conversation.")
    
    while True:
        user_input = input("You: ")

        if user_input.lower() == 'exit':
            print("Chatbot: Goodbye!")
            break
        
        response = chatbot_response(user_input)
        print(f"Chatbot: {response}")
