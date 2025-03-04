def chatbot_response(user_input):
    user_input = user_input.lower()

    if "hi" in user_input:
        return "Hello, how can I help you?"
    elif "i want you to help me" in user_input:
        return "Just give me your question."
    elif "job" in user_input or "work" in user_input:
        return "Are you looking for a job opportunity? I can help you with career advice and job openings."
    elif "internship" in user_input:
        return "Internships are a great way to gain experience! Are you looking for one, or do you need help applying?"
    elif "freelance" in user_input:
        return "Freelancing offers flexibility and independence. Do you need help finding freelance opportunities or managing clients?"
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
